<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmLogsResponseBody\logs;

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
     * @description The ID of the object on which the operation was performed.
     *
     * @example 121212
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The name of the object on which the operation was performed.
     *
     * @example test-pool-1
     *
     * @var string
     */
    public $entityName;

    /**
     * @description The type of the object on which the operation was performed.
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The ID of the record.
     *
     * @example 6726
     *
     * @var int
     */
    public $id;

    /**
     * @description The operation performed.
     *
     * @var string
     */
    public $operAction;

    /**
     * @description The time when the operation was performed.
     *
     * @example 2018-01-24T07:35Z
     *
     * @var string
     */
    public $operTime;

    /**
     * @description The timestamp of the operation.
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
        if (isset($map['OperTime'])) {
            $model->operTime = $map['OperTime'];
        }
        if (isset($map['OperTimestamp'])) {
            $model->operTimestamp = $map['OperTimestamp'];
        }

        return $model;
    }
}
