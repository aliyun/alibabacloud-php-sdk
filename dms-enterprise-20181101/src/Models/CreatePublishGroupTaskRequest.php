<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreatePublishGroupTaskRequest extends Model
{
    /**
     * @example 12345
     *
     * @var int
     */
    public $dbId;

    /**
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @example 142435
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 2019-10-10 00:00:00
     *
     * @var string
     */
    public $planTime;

    /**
     * @example IMMEDIATELY
     *
     * @var string
     */
    public $publishStrategy;

    /**
     * @example -1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbId'            => 'DbId',
        'logic'           => 'Logic',
        'orderId'         => 'OrderId',
        'planTime'        => 'PlanTime',
        'publishStrategy' => 'PublishStrategy',
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
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
