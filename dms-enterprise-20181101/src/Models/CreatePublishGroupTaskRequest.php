<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreatePublishGroupTaskRequest extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $planTime;

    /**
     * @var string
     */
    public $publishStrategy;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbId'            => 'DbId',
        'logic'           => 'Logic',
        'orderId'         => 'OrderId',
        'planTime'        => 'PlanTime',
        'publishStrategy' => 'PublishStrategy',
        'regionId'        => 'RegionId',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->planTime) {
            $res['PlanTime'] = $this->planTime;
        }
        if (null !== $this->publishStrategy) {
            $res['PublishStrategy'] = $this->publishStrategy;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePublishGroupTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PlanTime'])) {
            $model->planTime = $map['PlanTime'];
        }
        if (isset($map['PublishStrategy'])) {
            $model->publishStrategy = $map['PublishStrategy'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
