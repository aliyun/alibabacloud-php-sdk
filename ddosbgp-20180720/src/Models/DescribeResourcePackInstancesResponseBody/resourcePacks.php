<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeResourcePackInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class resourcePacks extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $resourcePackId;

    /**
     * @var int
     */
    public $currCapacity;

    /**
     * @var int
     */
    public $initCapacity;
    protected $_name = [
        'endTime'        => 'EndTime',
        'status'         => 'Status',
        'startTime'      => 'StartTime',
        'resourcePackId' => 'ResourcePackId',
        'currCapacity'   => 'CurrCapacity',
        'initCapacity'   => 'InitCapacity',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->resourcePackId) {
            $res['ResourcePackId'] = $this->resourcePackId;
        }
        if (null !== $this->currCapacity) {
            $res['CurrCapacity'] = $this->currCapacity;
        }
        if (null !== $this->initCapacity) {
            $res['InitCapacity'] = $this->initCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ResourcePackId'])) {
            $model->resourcePackId = $map['ResourcePackId'];
        }
        if (isset($map['CurrCapacity'])) {
            $model->currCapacity = $map['CurrCapacity'];
        }
        if (isset($map['InitCapacity'])) {
            $model->initCapacity = $map['InitCapacity'];
        }

        return $model;
    }
}
