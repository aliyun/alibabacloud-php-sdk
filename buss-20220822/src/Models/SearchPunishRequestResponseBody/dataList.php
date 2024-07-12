<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models\SearchPunishRequestResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $antiPunishRespTime;

    /**
     * @var string
     */
    public $antiPunishTime;

    /**
     * @var string
     */
    public $antiResult;

    /**
     * @var string
     */
    public $antiStatus;

    /**
     * @var string
     */
    public $bussinessCode;

    /**
     * @var string
     */
    public $caseCode;

    /**
     * @var string
     */
    public $caseExtendCode;

    /**
     * @var string
     */
    public $caseSubCode;

    /**
     * @var string
     */
    public $class;

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
    public $eventCode;

    /**
     * @var string
     */
    public $expectedRemoveTime;

    /**
     * @var string
     */
    public $extRequestId;

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
    public $idType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ipString;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $punishDomain;

    /**
     * @var string
     */
    public $punishIp;

    /**
     * @var string
     */
    public $punishRequest;

    /**
     * @var string
     */
    public $punishRespTime;

    /**
     * @var string
     */
    public $punishResult;

    /**
     * @var string
     */
    public $punishStatus;

    /**
     * @var string
     */
    public $punishTime;

    /**
     * @var string
     */
    public $punishUrl;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $sourceCode;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'antiPunishRespTime' => 'AntiPunishRespTime',
        'antiPunishTime'     => 'AntiPunishTime',
        'antiResult'         => 'AntiResult',
        'antiStatus'         => 'AntiStatus',
        'bussinessCode'      => 'BussinessCode',
        'caseCode'           => 'CaseCode',
        'caseExtendCode'     => 'CaseExtendCode',
        'caseSubCode'        => 'CaseSubCode',
        'class'              => 'Class',
        'creator'            => 'Creator',
        'deleted'            => 'Deleted',
        'eventCode'          => 'EventCode',
        'expectedRemoveTime' => 'ExpectedRemoveTime',
        'extRequestId'       => 'ExtRequestId',
        'gmtCreated'         => 'GmtCreated',
        'gmtModified'        => 'GmtModified',
        'id'                 => 'Id',
        'idType'             => 'IdType',
        'instanceId'         => 'InstanceId',
        'ipString'           => 'IpString',
        'modifier'           => 'Modifier',
        'punishDomain'       => 'PunishDomain',
        'punishIp'           => 'PunishIp',
        'punishRequest'      => 'PunishRequest',
        'punishRespTime'     => 'PunishRespTime',
        'punishResult'       => 'PunishResult',
        'punishStatus'       => 'PunishStatus',
        'punishTime'         => 'PunishTime',
        'punishUrl'          => 'PunishUrl',
        'reason'             => 'Reason',
        'sourceCode'         => 'SourceCode',
        'userId'             => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antiPunishRespTime) {
            $res['AntiPunishRespTime'] = $this->antiPunishRespTime;
        }
        if (null !== $this->antiPunishTime) {
            $res['AntiPunishTime'] = $this->antiPunishTime;
        }
        if (null !== $this->antiResult) {
            $res['AntiResult'] = $this->antiResult;
        }
        if (null !== $this->antiStatus) {
            $res['AntiStatus'] = $this->antiStatus;
        }
        if (null !== $this->bussinessCode) {
            $res['BussinessCode'] = $this->bussinessCode;
        }
        if (null !== $this->caseCode) {
            $res['CaseCode'] = $this->caseCode;
        }
        if (null !== $this->caseExtendCode) {
            $res['CaseExtendCode'] = $this->caseExtendCode;
        }
        if (null !== $this->caseSubCode) {
            $res['CaseSubCode'] = $this->caseSubCode;
        }
        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }
        if (null !== $this->expectedRemoveTime) {
            $res['ExpectedRemoveTime'] = $this->expectedRemoveTime;
        }
        if (null !== $this->extRequestId) {
            $res['ExtRequestId'] = $this->extRequestId;
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
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipString) {
            $res['IpString'] = $this->ipString;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->punishDomain) {
            $res['PunishDomain'] = $this->punishDomain;
        }
        if (null !== $this->punishIp) {
            $res['PunishIp'] = $this->punishIp;
        }
        if (null !== $this->punishRequest) {
            $res['PunishRequest'] = $this->punishRequest;
        }
        if (null !== $this->punishRespTime) {
            $res['PunishRespTime'] = $this->punishRespTime;
        }
        if (null !== $this->punishResult) {
            $res['PunishResult'] = $this->punishResult;
        }
        if (null !== $this->punishStatus) {
            $res['PunishStatus'] = $this->punishStatus;
        }
        if (null !== $this->punishTime) {
            $res['PunishTime'] = $this->punishTime;
        }
        if (null !== $this->punishUrl) {
            $res['PunishUrl'] = $this->punishUrl;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
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
        if (isset($map['AntiPunishRespTime'])) {
            $model->antiPunishRespTime = $map['AntiPunishRespTime'];
        }
        if (isset($map['AntiPunishTime'])) {
            $model->antiPunishTime = $map['AntiPunishTime'];
        }
        if (isset($map['AntiResult'])) {
            $model->antiResult = $map['AntiResult'];
        }
        if (isset($map['AntiStatus'])) {
            $model->antiStatus = $map['AntiStatus'];
        }
        if (isset($map['BussinessCode'])) {
            $model->bussinessCode = $map['BussinessCode'];
        }
        if (isset($map['CaseCode'])) {
            $model->caseCode = $map['CaseCode'];
        }
        if (isset($map['CaseExtendCode'])) {
            $model->caseExtendCode = $map['CaseExtendCode'];
        }
        if (isset($map['CaseSubCode'])) {
            $model->caseSubCode = $map['CaseSubCode'];
        }
        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }
        if (isset($map['ExpectedRemoveTime'])) {
            $model->expectedRemoveTime = $map['ExpectedRemoveTime'];
        }
        if (isset($map['ExtRequestId'])) {
            $model->extRequestId = $map['ExtRequestId'];
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
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpString'])) {
            $model->ipString = $map['IpString'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['PunishDomain'])) {
            $model->punishDomain = $map['PunishDomain'];
        }
        if (isset($map['PunishIp'])) {
            $model->punishIp = $map['PunishIp'];
        }
        if (isset($map['PunishRequest'])) {
            $model->punishRequest = $map['PunishRequest'];
        }
        if (isset($map['PunishRespTime'])) {
            $model->punishRespTime = $map['PunishRespTime'];
        }
        if (isset($map['PunishResult'])) {
            $model->punishResult = $map['PunishResult'];
        }
        if (isset($map['PunishStatus'])) {
            $model->punishStatus = $map['PunishStatus'];
        }
        if (isset($map['PunishTime'])) {
            $model->punishTime = $map['PunishTime'];
        }
        if (isset($map['PunishUrl'])) {
            $model->punishUrl = $map['PunishUrl'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
