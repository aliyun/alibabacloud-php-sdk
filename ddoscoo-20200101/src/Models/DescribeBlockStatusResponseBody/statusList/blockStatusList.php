<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlockStatusResponseBody\statusList;

use AlibabaCloud\Tea\Model;

class blockStatusList extends Model
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
    public $line;

    /**
     * @var string
     */
    public $blockStatus;
    protected $_name = [
        'endTime'     => 'EndTime',
        'startTime'   => 'StartTime',
        'line'        => 'Line',
        'blockStatus' => 'BlockStatus',
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
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->blockStatus) {
            $res['BlockStatus'] = $this->blockStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockStatusList
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
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['BlockStatus'])) {
            $model->blockStatus = $map['BlockStatus'];
        }

        return $model;
    }
}
