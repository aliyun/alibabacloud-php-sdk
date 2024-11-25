<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeChangeLogsResponseBody\changeLogs;

use AlibabaCloud\Tea\Model;

class changeLog extends Model
{
    /**
     * @description The operation content.
     *
     * @example Add RR:test.03 Type:A Line:default TTL:300 Value:172.20.XX.XX
     *
     * @var string
     */
    public $content;

    /**
     * @description The operator ID.
     *
     * @example 141339776561****
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
     * @var string
     */
    public $creatorUserId;

    /**
     * @description The unique ID of the zone, user-defined line, forwarding rule, outbound endpoint, or inbound endpoint.
     *
     * @example df2d03865266bd9842306db586d3****
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The name of the object on which the operation was performed, such as the domain name, user-defined line, cache retention domain name, forwarding rule, outbound endpoint, or inbound endpoint.
     *
     * @example test-api.com
     *
     * @var string
     */
    public $entityName;

    /**
     * @description The ID of the operation log.
     *
     * @example 90761578646770****
     *
     * @var int
     */
    public $id;

    /**
     * @description The specific operation performed on the object, such as adding, deleting, modifying, or associating the object.
     *
     * @example add
     *
     * @var string
     */
    public $operAction;

    /**
     * @description The public IP address of the operator terminal. If the IP address of the operator terminal is a private IP address, the value of this parameter is the public IP address to which the private IP address is mapped after network address translation (NAT).
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $operIp;

    /**
     * @description The type of the object on which the operation was performed. Valid values:
     *
     *   **PV_ZONE**: the built-in authoritative zone
     *   **PV_RECORD**: the DNS record
     *   **RESOLVER_RULE**: the forwarding rule
     *   **CUSTOM_LINE**: the user-defined line
     *   **RESOLVER_ENDPOINT**: the outbound endpoint
     *   **INBOUND_ENDPOINT**: the inbound endpoint
     *   **CACHE_RESERVE_DOMAIN**: the cache retention domain name
     *
     * @example PV_ZONE
     *
     * @var string
     */
    public $operObject;

    /**
     * @description The time when the operation is performed. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
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
        'creatorUserId'  => 'CreatorUserId',
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
        if (null !== $this->creatorUserId) {
            $res['CreatorUserId'] = $this->creatorUserId;
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
        if (isset($map['CreatorUserId'])) {
            $model->creatorUserId = $map['CreatorUserId'];
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
