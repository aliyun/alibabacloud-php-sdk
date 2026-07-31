<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class UpdateFormationCrawlerScheduleStateRequest extends Model
{
    /**
     * @var int
     */
    public $crawlerTaskId;

    /**
     * @var string
     */
    public $crawlerTaskName;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scheduleState;
    protected $_name = [
        'crawlerTaskId' => 'CrawlerTaskId',
        'crawlerTaskName' => 'CrawlerTaskName',
        'DBClusterId' => 'DBClusterId',
        'regionId' => 'RegionId',
        'scheduleState' => 'ScheduleState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crawlerTaskId) {
            $res['CrawlerTaskId'] = $this->crawlerTaskId;
        }

        if (null !== $this->crawlerTaskName) {
            $res['CrawlerTaskName'] = $this->crawlerTaskName;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scheduleState) {
            $res['ScheduleState'] = $this->scheduleState;
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
        if (isset($map['CrawlerTaskId'])) {
            $model->crawlerTaskId = $map['CrawlerTaskId'];
        }

        if (isset($map['CrawlerTaskName'])) {
            $model->crawlerTaskName = $map['CrawlerTaskName'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScheduleState'])) {
            $model->scheduleState = $map['ScheduleState'];
        }

        return $model;
    }
}
