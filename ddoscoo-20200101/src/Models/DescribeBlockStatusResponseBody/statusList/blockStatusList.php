<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlockStatusResponseBody\statusList;

use AlibabaCloud\Tea\Model;

class blockStatusList extends Model
{
    /**
     * @var string
     */
    public $blockStatus;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $line;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'blockStatus' => 'BlockStatus',
        'endTime'     => 'EndTime',
        'line'        => 'Line',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockStatus) {
            $res['BlockStatus'] = $this->blockStatus;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['BlockStatus'])) {
            $model->blockStatus = $map['BlockStatus'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
