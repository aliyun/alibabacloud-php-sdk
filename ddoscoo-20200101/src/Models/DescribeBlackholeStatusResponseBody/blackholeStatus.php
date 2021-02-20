<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlackholeStatusResponseBody;

use AlibabaCloud\Tea\Model;

class blackholeStatus extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $blackStatus;
    protected $_name = [
        'endTime'     => 'EndTime',
        'startTime'   => 'StartTime',
        'ip'          => 'Ip',
        'blackStatus' => 'BlackStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->blackStatus) {
            $res['BlackStatus'] = $this->blackStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blackholeStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['BlackStatus'])) {
            $model->blackStatus = $map['BlackStatus'];
        }

        return $model;
    }
}
