<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\ListMeasurePointListByNodeCodePageResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $acqFreq;

    /**
     * @var string
     */
    public $alarmAttribute;

    /**
     * @var string
     */
    public $alarmLevel;

    /**
     * @var string
     */
    public $calcAttribute;

    /**
     * @var string
     */
    public $calcFormula;

    /**
     * @var string
     */
    public $calcType;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errMsgDetail;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModify;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $initValue;

    /**
     * @var string
     */
    public $isEnable;

    /**
     * @var string
     */
    public $lastUploadTime;

    /**
     * @var string
     */
    public $latestValue;

    /**
     * @var string
     */
    public $lowerLimit;

    /**
     * @var string
     */
    public $measurePointState;

    /**
     * @var string
     */
    public $modifyUser;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeCode;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $parentFullName;

    /**
     * @var string
     */
    public $payLoad;

    /**
     * @var string
     */
    public $protocolConfig;

    /**
     * @var string
     */
    public $sourcePoint;

    /**
     * @var string
     */
    public $tenantCode;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $upperLimit;
    protected $_name = [
        'acqFreq' => 'AcqFreq',
        'alarmAttribute' => 'AlarmAttribute',
        'alarmLevel' => 'AlarmLevel',
        'calcAttribute' => 'CalcAttribute',
        'calcFormula' => 'CalcFormula',
        'calcType' => 'CalcType',
        'code' => 'Code',
        'createUser' => 'CreateUser',
        'dataSourceId' => 'DataSourceId',
        'dataType' => 'DataType',
        'description' => 'Description',
        'errMsgDetail' => 'ErrMsgDetail',
        'fullName' => 'FullName',
        'gmtCreate' => 'GmtCreate',
        'gmtModify' => 'GmtModify',
        'id' => 'Id',
        'initValue' => 'InitValue',
        'isEnable' => 'IsEnable',
        'lastUploadTime' => 'LastUploadTime',
        'latestValue' => 'LatestValue',
        'lowerLimit' => 'LowerLimit',
        'measurePointState' => 'MeasurePointState',
        'modifyUser' => 'ModifyUser',
        'name' => 'Name',
        'nodeCode' => 'NodeCode',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'parentFullName' => 'ParentFullName',
        'payLoad' => 'PayLoad',
        'protocolConfig' => 'ProtocolConfig',
        'sourcePoint' => 'SourcePoint',
        'tenantCode' => 'TenantCode',
        'time' => 'Time',
        'type' => 'Type',
        'unit' => 'Unit',
        'upperLimit' => 'UpperLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acqFreq) {
            $res['AcqFreq'] = $this->acqFreq;
        }

        if (null !== $this->alarmAttribute) {
            $res['AlarmAttribute'] = $this->alarmAttribute;
        }

        if (null !== $this->alarmLevel) {
            $res['AlarmLevel'] = $this->alarmLevel;
        }

        if (null !== $this->calcAttribute) {
            $res['CalcAttribute'] = $this->calcAttribute;
        }

        if (null !== $this->calcFormula) {
            $res['CalcFormula'] = $this->calcFormula;
        }

        if (null !== $this->calcType) {
            $res['CalcType'] = $this->calcType;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->errMsgDetail) {
            $res['ErrMsgDetail'] = $this->errMsgDetail;
        }

        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->initValue) {
            $res['InitValue'] = $this->initValue;
        }

        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }

        if (null !== $this->lastUploadTime) {
            $res['LastUploadTime'] = $this->lastUploadTime;
        }

        if (null !== $this->latestValue) {
            $res['LatestValue'] = $this->latestValue;
        }

        if (null !== $this->lowerLimit) {
            $res['LowerLimit'] = $this->lowerLimit;
        }

        if (null !== $this->measurePointState) {
            $res['MeasurePointState'] = $this->measurePointState;
        }

        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeCode) {
            $res['NodeCode'] = $this->nodeCode;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->parentFullName) {
            $res['ParentFullName'] = $this->parentFullName;
        }

        if (null !== $this->payLoad) {
            $res['PayLoad'] = $this->payLoad;
        }

        if (null !== $this->protocolConfig) {
            $res['ProtocolConfig'] = $this->protocolConfig;
        }

        if (null !== $this->sourcePoint) {
            $res['SourcePoint'] = $this->sourcePoint;
        }

        if (null !== $this->tenantCode) {
            $res['TenantCode'] = $this->tenantCode;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        if (null !== $this->upperLimit) {
            $res['UpperLimit'] = $this->upperLimit;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcqFreq'])) {
            $model->acqFreq = $map['AcqFreq'];
        }

        if (isset($map['AlarmAttribute'])) {
            $model->alarmAttribute = $map['AlarmAttribute'];
        }

        if (isset($map['AlarmLevel'])) {
            $model->alarmLevel = $map['AlarmLevel'];
        }

        if (isset($map['CalcAttribute'])) {
            $model->calcAttribute = $map['CalcAttribute'];
        }

        if (isset($map['CalcFormula'])) {
            $model->calcFormula = $map['CalcFormula'];
        }

        if (isset($map['CalcType'])) {
            $model->calcType = $map['CalcType'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ErrMsgDetail'])) {
            $model->errMsgDetail = $map['ErrMsgDetail'];
        }

        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InitValue'])) {
            $model->initValue = $map['InitValue'];
        }

        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }

        if (isset($map['LastUploadTime'])) {
            $model->lastUploadTime = $map['LastUploadTime'];
        }

        if (isset($map['LatestValue'])) {
            $model->latestValue = $map['LatestValue'];
        }

        if (isset($map['LowerLimit'])) {
            $model->lowerLimit = $map['LowerLimit'];
        }

        if (isset($map['MeasurePointState'])) {
            $model->measurePointState = $map['MeasurePointState'];
        }

        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeCode'])) {
            $model->nodeCode = $map['NodeCode'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['ParentFullName'])) {
            $model->parentFullName = $map['ParentFullName'];
        }

        if (isset($map['PayLoad'])) {
            $model->payLoad = $map['PayLoad'];
        }

        if (isset($map['ProtocolConfig'])) {
            $model->protocolConfig = $map['ProtocolConfig'];
        }

        if (isset($map['SourcePoint'])) {
            $model->sourcePoint = $map['SourcePoint'];
        }

        if (isset($map['TenantCode'])) {
            $model->tenantCode = $map['TenantCode'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        if (isset($map['UpperLimit'])) {
            $model->upperLimit = $map['UpperLimit'];
        }

        return $model;
    }
}
