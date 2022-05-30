<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDutyRosterResponseBody\paging;

use AlibabaCloud\Tea\Model;

class dutyRoster extends Model
{
    /**
     * @var int
     */
    public $endLong;

    /**
     * @var int
     */
    public $startLong;

    /**
     * @var string
     */
    public $watchkeeper;

    /**
     * @var string
     */
    public $watchkeeperName;
    protected $_name = [
        'endLong'         => 'EndLong',
        'startLong'       => 'StartLong',
        'watchkeeper'     => 'Watchkeeper',
        'watchkeeperName' => 'WatchkeeperName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endLong) {
            $res['EndLong'] = $this->endLong;
        }
        if (null !== $this->startLong) {
            $res['StartLong'] = $this->startLong;
        }
        if (null !== $this->watchkeeper) {
            $res['Watchkeeper'] = $this->watchkeeper;
        }
        if (null !== $this->watchkeeperName) {
            $res['WatchkeeperName'] = $this->watchkeeperName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dutyRoster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndLong'])) {
            $model->endLong = $map['EndLong'];
        }
        if (isset($map['StartLong'])) {
            $model->startLong = $map['StartLong'];
        }
        if (isset($map['Watchkeeper'])) {
            $model->watchkeeper = $map['Watchkeeper'];
        }
        if (isset($map['WatchkeeperName'])) {
            $model->watchkeeperName = $map['WatchkeeperName'];
        }

        return $model;
    }
}
