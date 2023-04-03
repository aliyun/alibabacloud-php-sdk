<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmLogsResponseBody\logs;

use AlibabaCloud\Tea\Model;

class log extends Model
{
    /**
     * @description The formatted message content.
     *
     * @example addtest-pool-1
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the object that was operated on.
     *
     * @example 121212
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The name of the object that was operated on.
     *
     * @example test-pool-1
     *
     * @var string
     */
    public $entityName;

    /**
     * @description The type of the object that was operated on.
     *
     * @example POOL
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The ID of the log record.
     *
     * @example 6726
     *
     * @var int
     */
    public $id;

    /**
     * @description The operation performed.
     *
     * @example add
     *
     * @var string
     */
    public $operAction;

    /**
     * @description The IP address subject to the operation.
     *
     * @example 106.11.34.X
     *
     * @var string
     */
    public $operIp;

    /**
     * @description The time when the operation was performed.
     *
     * @example 2018-01-24T07:35Z
     *
     * @var string
     */
    public $operTime;

    /**
     * @description A timestamp that indicates the time when the operation was performed.
     *
     * @example 1516779348000
     *
     * @var int
     */
    public $operTimestamp;
    protected $_name = [
        'content'       => 'Content',
        'entityId'      => 'EntityId',
        'entityName'    => 'EntityName',
        'entityType'    => 'EntityType',
        'id'            => 'Id',
        'operAction'    => 'OperAction',
        'operIp'        => 'OperIp',
        'operTime'      => 'OperTime',
        'operTimestamp' => 'OperTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->operAction) {
            $res['OperAction'] = $this->operAction;
        }
        if (null !== $this->operIp) {
            $res['OperIp'] = $this->operIp;
        }
        if (null !== $this->operTime) {
            $res['OperTime'] = $this->operTime;
        }
        if (null !== $this->operTimestamp) {
            $res['OperTimestamp'] = $this->operTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return log
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OperAction'])) {
            $model->operAction = $map['OperAction'];
        }
        if (isset($map['OperIp'])) {
            $model->operIp = $map['OperIp'];
        }
        if (isset($map['OperTime'])) {
            $model->operTime = $map['OperTime'];
        }
        if (isset($map['OperTimestamp'])) {
            $model->operTimestamp = $map['OperTimestamp'];
        }

        return $model;
    }
}
