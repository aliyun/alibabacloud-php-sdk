<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreatePublishGroupTaskRequest extends Model
{
    /**
     * @description The ID of the database for which the schema design is executed.
     *
     * This parameter is required.
     * @example 12345
     *
     * @var int
     */
    public $dbId;

    /**
     * @description Indicates whether the database is a logical database.
     *
     * This parameter is required.
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The ID of the ticket.
     *
     * This parameter is required.
     * @example 142435
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The time to execute the schema design ticket.
     *
     * @example 2019-10-10 00:00:00
     *
     * @var string
     */
    public $planTime;

    /**
     * @description The policy to execute the schema design ticket. Valid values:
     *
     *   IMMEDIATELY: immediately executes the schema design ticket.
     *   REGULARLY: executes the schema design ticket at a scheduled time.
     *
     * This parameter is required.
     * @example IMMEDIATELY
     *
     * @var string
     */
    public $publishStrategy;

    /**
     * @description The ID of the tenant.
     *
     * > : To view the ID of the tenant, log on to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html).
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
