<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class DescribeSiteMonitorLogRequest extends Model
{
    /**
     * @var string
     */
    public $browser;

    /**
     * @var string
     */
    public $browserInfo;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var int
     */
    public $length;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskIds;
    protected $_name = [
        'browser' => 'Browser',
        'browserInfo' => 'BrowserInfo',
        'city' => 'City',
        'device' => 'Device',
        'endTime' => 'EndTime',
        'filter' => 'Filter',
        'isp' => 'Isp',
        'length' => 'Length',
        'metricName' => 'MetricName',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'taskIds' => 'TaskIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browser) {
            $res['Browser'] = $this->browser;
        }

        if (null !== $this->browserInfo) {
            $res['BrowserInfo'] = $this->browserInfo;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Browser'])) {
            $model->browser = $map['Browser'];
        }

        if (isset($map['BrowserInfo'])) {
            $model->browserInfo = $map['BrowserInfo'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TaskIds'])) {
            $model->taskIds = $map['TaskIds'];
        }

        return $model;
    }
}
