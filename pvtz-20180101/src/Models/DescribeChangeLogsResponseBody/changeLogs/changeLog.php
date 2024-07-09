<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeChangeLogsResponseBody\changeLogs;

use AlibabaCloud\Tea\Model;

class changeLog extends Model
{
    /**
     * @description The details of the operation.
     *
     * @example add test-api.com
     *
     * @var string
     */
    public $content;

    /**
     * @description The operator ID.
     *
     * @example 13270376
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The subtype of the operator. Valid values:
     *
     *   CUSTOMER: Alibaba Cloud account
     *   SUB: RAM user
     *   STS: assumed role that obtains the Security Token Service (STS) token of a RAM role
     *   OTHER: other types
     *
     * @example SUB
     *
     * @var string
     */
    public $creatorSubType;

    /**
     * @description The operator type. No value or **USER** is returned for this parameter.
     *
     * @example USER
     *
     * @var string
     */
    public $creatorType;

    /**
     * @description The ID of the object on which the operation was performed.
     *
     * @example CAgICA1OA_58
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The name of the object on which the operation was performed.
     *
     * @example test-api.com
     *
     * @var string
     */
    public $entityName;

    /**
     * @description The log ID.
     *
     * @example 6726
     *
     * @var int
     */
    public $id;

    /**
     * @description The operation type.
     *
     * @example add
     *
     * @var string
     */
    public $operAction;

    /**
     * @description The IP address of the client.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $operIp;

    /**
     * @description The type of the object on which the operation is performed.
     *
     * @example PV_ZONE
     *
     * @var string
     */
    public $operObject;

    /**
     * @description The time when the operation is performed. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2018-01-24T07:35Z
     *
     * @var string
     */
    public $operTime;

    /**
     * @description The time when the operation was performed. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1516779348000
     *
     * @var int
     */
    public $operTimestamp;
    protected $_name = [
        'content'        => 'Content',
        'creatorId'      => 'CreatorId',
        'creatorSubType' => 'CreatorSubType',
        'creatorType'    => 'CreatorType',
        'entityId'       => 'EntityId',
        'entityName'     => 'EntityName',
        'id'             => 'Id',
        'operAction'     => 'OperAction',
        'operIp'         => 'OperIp',
        'operObject'     => 'OperObject',
        'operTime'       => 'OperTime',
        'operTimestamp'  => 'OperTimestamp',
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
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorSubType) {
            $res['CreatorSubType'] = $this->creatorSubType;
        }
        if (null !== $this->creatorType) {
            $res['CreatorType'] = $this->creatorType;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
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
        if (null !== $this->operObject) {
            $res['OperObject'] = $this->operObject;
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
     * @return changeLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorSubType'])) {
            $model->creatorSubType = $map['CreatorSubType'];
        }
        if (isset($map['CreatorType'])) {
            $model->creatorType = $map['CreatorType'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
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
        if (isset($map['OperObject'])) {
            $model->operObject = $map['OperObject'];
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
