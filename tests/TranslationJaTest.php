<?php

namespace Tests\Jenssegers;

class TranslationJaTest extends TestCaseBase
{
    const LOCALE = 'ja';

    /**
     * @test
     */
    public function it_can_translate_month()
    {
        $jan = Date::createFromFormat('m-d', '01-01');
        $feb = Date::createFromFormat('m-d', '02-01');
        $mar = Date::createFromFormat('m-d', '03-01');
        $apr = Date::createFromFormat('m-d', '04-01');
        $may = Date::createFromFormat('m-d', '05-01');
        $jun = Date::createFromFormat('m-d', '06-01');
        $jul = Date::createFromFormat('m-d', '07-01');
        $aug = Date::createFromFormat('m-d', '08-01');
        $sep = Date::createFromFormat('m-d', '09-01');
        $oct = Date::createFromFormat('m-d', '10-01');
        $nov = Date::createFromFormat('m-d', '11-01');
        $dec = Date::createFromFormat('m-d', '12-01');

        $this->assertEquals('1月', $jan->format('F'));
        $this->assertEquals('2月', $feb->format('F'));
        $this->assertEquals('3月', $mar->format('F'));
        $this->assertEquals('4月', $apr->format('F'));
        $this->assertEquals('5月', $may->format('F'));
        $this->assertEquals('6月', $jun->format('F'));
        $this->assertEquals('7月', $jul->format('F'));
        $this->assertEquals('8月', $aug->format('F'));
        $this->assertEquals('9月', $sep->format('F'));
        $this->assertEquals('10月', $oct->format('F'));
        $this->assertEquals('11月', $nov->format('F'));
        $this->assertEquals('12月', $dec->format('F'));
    }

    /**
     * @test
     */
    public function it_can_translate_weekdays()
    {
        $mon = Date::parse('next monday');
        $tue = Date::parse('next tuesday');
        $wed = Date::parse('next wednesday');
        $thu = Date::parse('next thursday');
        $fri = Date::parse('next friday');
        $sat = Date::parse('next saturday');
        $sun = Date::parse('next sunday');

        $this->assertEquals('月曜日', $mon->format('l'));
        $this->assertEquals('火曜日', $tue->format('l'));
        $this->assertEquals('水曜日', $wed->format('l'));
        $this->assertEquals('木曜日', $thu->format('l'));
        $this->assertEquals('金曜日', $fri->format('l'));
        $this->assertEquals('土曜日', $sat->format('l'));
        $this->assertEquals('日曜日', $sun->format('l'));
    }

    /**
     * @test
     */
    public function it_can_translate_weekdays_short_form()
    {
        $mon = Date::parse('next monday');
        $tue = Date::parse('next tuesday');
        $wed = Date::parse('next wednesday');
        $thu = Date::parse('next thursday');
        $fri = Date::parse('next friday');
        $sat = Date::parse('next saturday');
        $sun = Date::parse('next sunday');

        $this->assertEquals('月', $mon->format('D'));
        $this->assertEquals('火', $tue->format('D'));
        $this->assertEquals('水', $wed->format('D'));
        $this->assertEquals('木', $thu->format('D'));
        $this->assertEquals('金', $fri->format('D'));
        $this->assertEquals('土', $sat->format('D'));
        $this->assertEquals('日', $sun->format('D'));
    }

    /**
     * @test
     */
    public function it_can_translate_seconds_ago()
    {
        $oneSecondAgo = Date::parse('-1 second');
        $fiveSecondsAgo = Date::parse('-5 seconds');

        $this->assertEquals('1秒前', $oneSecondAgo->ago());
        $this->assertEquals('5秒前', $fiveSecondsAgo->ago());
    }

    /**
     * @test
     */
    public function it_can_translate_minutes_ago()
    {
        $oneMinuteAgo = Date::parse('-1 minute');
        $fiveMinutesAgo = Date::parse('-5 minutes');

        $this->assertEquals('1分前', $oneMinuteAgo->ago());
        $this->assertEquals('5分前', $fiveMinutesAgo->ago());
    }

    /**
     * @test
     */
    public function it_can_translate_hours_ago()
    {
        $oneHourAgo = Date::parse('-1 hour');
        $fiveHoursAgo = Date::parse('-5 hours');

        $this->assertEquals('1時間前', $oneHourAgo->ago());
        $this->assertEquals('5時間前', $fiveHoursAgo->ago());
    }

    /**
     * @test
     */
    public function it_can_translate_days_ago()
    {
        $oneDayAgo = Date::parse('-1 day');
        $threeDaysAgo = Date::parse('-3 days');

        $this->assertEquals('1日前', $oneDayAgo->ago());
        $this->assertEquals('3日前', $threeDaysAgo->ago());
    }

    /**
     * @test
     */
    public function it_can_translate_weeks_ago()
    {
        $oneWeekAgo = Date::parse('-1 week');
        $threeWeeksAgo = Date::parse('-3 weeks');

        $this->assertEquals('1週間前', $oneWeekAgo->ago());
        $this->assertEquals('3週間前', $threeWeeksAgo->ago());
    }

    /**
     * @test
     */
    public function it_can_translate_months_ago()
    {
        $oneMonthAgo = Date::parse('-1 month');
        $twoMonthsAgo = Date::parse('-2 months');

        $this->assertEquals('1ヶ月前', $oneMonthAgo->ago());
        $this->assertEquals('2ヶ月前', $twoMonthsAgo->ago());
    }

    /**
     * @test
     */
    public function it_can_translate_years_ago()
    {
        $oneYearAgo = Date::parse('-1 year');
        $towYearsAgo = Date::parse('-2 years');

        $this->assertEquals('1年前', $oneYearAgo->ago());
        $this->assertEquals('2年前', $towYearsAgo->ago());
    }

    /**
     * @test
     */
    public function it_can_translate_seconds_from_now()
    {
        $oneSecondFromNow = Date::parse('1 second');
        $fiveSecondsFromNow = Date::parse('5 seconds');

        $this->assertEquals('1秒後', $oneSecondFromNow->diffForHumans());
        $this->assertEquals('5秒後', $fiveSecondsFromNow->diffForHumans());
    }

    /**
     * @test
     */
    public function it_can_translate_minutes_from_now()
    {
        $oneMinuteFromNow = Date::parse('1 minute');
        $fiveMinutesFromNow = Date::parse('5 minutes');

        $this->assertEquals('1分後', $oneMinuteFromNow->diffForHumans());
        $this->assertEquals('5分後', $fiveMinutesFromNow->diffForHumans());
    }

    /**
     * @test
     */
    public function it_can_translate_hours_from_now()
    {
        $oneHourFromNow = Date::parse('1 hour');
        $fiveHoursFromNow = Date::parse('5 hours');

        $this->assertEquals('1時間後', $oneHourFromNow->diffForHumans());
        $this->assertEquals('5時間後', $fiveHoursFromNow->diffForHumans());
    }

    /**
     * @test
     */
    public function it_can_translate_days_from_now()
    {
        $oneDayFromNow = Date::parse('1 day');
        $threeDaysFromNow = Date::parse('3 days');

        $this->assertEquals('1日後', $oneDayFromNow->diffForHumans());
        $this->assertEquals('3日後', $threeDaysFromNow->diffForHumans());
    }

    /**
     * @test
     */
    public function it_can_translate_weeks_from_now()
    {
        $oneWeekFromNow = Date::parse('1 week');
        $threeWeeksFromNow = Date::parse('3 weeks');

        $this->assertEquals('1週間後', $oneWeekFromNow->diffForHumans());
        $this->assertEquals('3週間後', $threeWeeksFromNow->diffForHumans());
    }

    /**
     * @test
     */
    public function it_can_translate_months_from_now()
    {
        $oneMonthFromNow = Date::parse('1 month');
        $twoMonthsFromNow = Date::parse('2 months');

        $this->assertEquals('1ヶ月後', $oneMonthFromNow->diffForHumans());
        $this->assertEquals('2ヶ月後', $twoMonthsFromNow->diffForHumans());
    }

    /**
     * @test
     */
    public function it_can_translate_years_from_now()
    {
        $oneYearFromNow = Date::parse('1 year');
        $towYearsFromNow = Date::parse('2 years');

        $this->assertEquals('1年後', $oneYearFromNow->diffForHumans());
        $this->assertEquals('2年後', $towYearsFromNow->diffForHumans());
    }
}
