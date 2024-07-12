<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models\PunishResourceSearchResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $actionCode;

    /**
     * @var string
     */
    public $bussinessCode;

    /**
     * @var string
     */
    public $class;

    /**
     * @var string
     */
    public $coordinate;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $extras;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $objectValue;

    /**
     * @var string
     */
    public $punishFrom;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceCode;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'actionCode'    => 'ActionCode',
        'bussinessCode' => 'BussinessCode',
        'class'         => 'Class',
        'coordinate'    => 'Coordinate',
        'creator'       => 'Creator',
        'deleted'       => 'Deleted',
        'domain'        => 'Domain',
        'extras'        => 'Extras',
        'gmtCreated'    => 'GmtCreated',
        'gmtModified'   => 'GmtModified',
        'id'            => 'Id',
        'instanceId'    => 'InstanceId',
        'ip'            => 'Ip',
        'modifier'      => 'Modifier',
        'objectId'      => 'ObjectId',
        'objectType'    => 'ObjectType',
        'objectValue'   => 'ObjectValue',
        'punishFrom'    => 'PunishFrom',
        'reason'        => 'Reason',
        'requestId'     => 'RequestId',
        'sourceCode'    => 'SourceCode',
        'status'        => 'Status',
        'url'           => 'Url',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionCode) {
            $res['ActionCode'] = $this->actionCode;
        }
        if (null !== $this->bussinessCode) {
            $res['BussinessCode'] = $this->bussinessCode;
        }
        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }
        if (null !== $this->coordinate) {
            $res['Coordinate'] = $this->coordinate;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->extras) {
            $res['Extras'] = $this->extras;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->objectValue) {
            $res['ObjectValue'] = $this->objectValue;
        }
        if (null !== $this->punishFrom) {
            $res['PunishFrom'] = $this->punishFrom;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionCode'])) {
            $model->actionCode = $map['ActionCode'];
        }
        if (isset($map['BussinessCode'])) {
            $model->bussinessCode = $map['BussinessCode'];
        }
        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }
        if (isset($map['Coordinate'])) {
            $model->coordinate = $map['Coordinate'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Extras'])) {
            $model->extras = $map['Extras'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['ObjectValue'])) {
            $model->objectValue = $map['ObjectValue'];
        }
        if (isset($map['PunishFrom'])) {
            $model->punishFrom = $map['PunishFrom'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
