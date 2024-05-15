<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetFullRequestSampleByInstanceIdRequest extends Model
{
    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1660104621000
     *
     * @var int
     */
    public $end;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The role of the PolarDB-X 2.0 node. Valid values:
     *
     *   **polarx_cn**: compute node.
     *   **polarx_en**: data node.
     *
     * @example polarx_cn
     *
     * @var string
     */
    public $role;

    /**
     * @description The SQL statement ID.
     *
     * This parameter is required.
     * @example 651b56fe9418d48edb8fdf0980ec****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1660097421000
     *
     * @var int
     */
    public $start;

    /**
     * @description The ID of the Alibaba Cloud account that is used to create the database instance.
     *
     * >  This parameter is optional. The system can automatically obtain the account ID based on the value of InstanceId when you call this operation.
     * @example 196278346919****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'end'        => 'End',
        'instanceId' => 'InstanceId',
        'role'       => 'Role',
        'sqlId'      => 'SqlId',
        'start'      => 'Start',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFullRequestSampleByInstanceIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
