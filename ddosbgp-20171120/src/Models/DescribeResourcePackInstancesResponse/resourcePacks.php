<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeResourcePackInstancesResponse;

use AlibabaCloud\Tea\Model;

class resourcePacks extends Model
{
    /**
     * @var string
     */
    public $resourcePackId;

    /**
     * @var int
     */
    public $initCapacity;

    /**
     * @var int
     */
    public $currCapacity;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'resourcePackId' => 'ResourcePackId',
        'initCapacity'   => 'InitCapacity',
        'currCapacity'   => 'CurrCapacity',
        'startTime'      => 'StartTime',
        'endTime'        => 'EndTime',
        'status'         => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('resourcePackId', $this->resourcePackId, true);
        Model::validateRequired('initCapacity', $this->initCapacity, true);
        Model::validateRequired('currCapacity', $this->currCapacity, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourcePackId) {
            $res['ResourcePackId'] = $this->resourcePackId;
        }
        if (null !== $this->initCapacity) {
            $res['InitCapacity'] = $this->initCapacity;
        }
        if (null !== $this->currCapacity) {
            $res['CurrCapacity'] = $this->currCapacity;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ResourcePackId'])) {
            $model->resourcePackId = $map['ResourcePackId'];
        }
        if (isset($map['InitCapacity'])) {
            $model->initCapacity = $map['InitCapacity'];
        }
        if (isset($map['CurrCapacity'])) {
            $model->currCapacity = $map['CurrCapacity'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
