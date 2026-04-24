<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateAgentResponseBody\data;

use AlibabaCloud\Dara\Model;

class agent extends Model
{
    /**
     * @var string
     */
    public $active;

    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var string
     */
    public $bindTel;

    /**
     * @var string
     */
    public $bindTelType;

    /**
     * @var string
     */
    public $callPower;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $ibRecord;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $isAsr;

    /**
     * @var string
     */
    public $isOb;

    /**
     * @var string
     */
    public $isQualityCheck;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $obClid;

    /**
     * @var string
     */
    public $obClidProperty;

    /**
     * @var string
     */
    public $obClidType;

    /**
     * @var string
     */
    public $obRecord;

    /**
     * @var string
     */
    public $power;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $webrtcUrlType;

    /**
     * @var string
     */
    public $wrapup;
    protected $_name = [
        'active' => 'Active',
        'areaCode' => 'AreaCode',
        'bindTel' => 'BindTel',
        'bindTelType' => 'BindTelType',
        'callPower' => 'CallPower',
        'cno' => 'Cno',
        'createTime' => 'CreateTime',
        'enterpriseId' => 'EnterpriseId',
        'ibRecord' => 'IbRecord',
        'id' => 'Id',
        'isAsr' => 'IsAsr',
        'isOb' => 'IsOb',
        'isQualityCheck' => 'IsQualityCheck',
        'name' => 'Name',
        'obClid' => 'ObClid',
        'obClidProperty' => 'ObClidProperty',
        'obClidType' => 'ObClidType',
        'obRecord' => 'ObRecord',
        'power' => 'Power',
        'status' => 'Status',
        'webrtcUrlType' => 'WebrtcUrlType',
        'wrapup' => 'Wrapup',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }

        if (null !== $this->bindTel) {
            $res['BindTel'] = $this->bindTel;
        }

        if (null !== $this->bindTelType) {
            $res['BindTelType'] = $this->bindTelType;
        }

        if (null !== $this->callPower) {
            $res['CallPower'] = $this->callPower;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->ibRecord) {
            $res['IbRecord'] = $this->ibRecord;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isAsr) {
            $res['IsAsr'] = $this->isAsr;
        }

        if (null !== $this->isOb) {
            $res['IsOb'] = $this->isOb;
        }

        if (null !== $this->isQualityCheck) {
            $res['IsQualityCheck'] = $this->isQualityCheck;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->obClid) {
            $res['ObClid'] = $this->obClid;
        }

        if (null !== $this->obClidProperty) {
            $res['ObClidProperty'] = $this->obClidProperty;
        }

        if (null !== $this->obClidType) {
            $res['ObClidType'] = $this->obClidType;
        }

        if (null !== $this->obRecord) {
            $res['ObRecord'] = $this->obRecord;
        }

        if (null !== $this->power) {
            $res['Power'] = $this->power;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->webrtcUrlType) {
            $res['WebrtcUrlType'] = $this->webrtcUrlType;
        }

        if (null !== $this->wrapup) {
            $res['Wrapup'] = $this->wrapup;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }

        if (isset($map['BindTel'])) {
            $model->bindTel = $map['BindTel'];
        }

        if (isset($map['BindTelType'])) {
            $model->bindTelType = $map['BindTelType'];
        }

        if (isset($map['CallPower'])) {
            $model->callPower = $map['CallPower'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['IbRecord'])) {
            $model->ibRecord = $map['IbRecord'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsAsr'])) {
            $model->isAsr = $map['IsAsr'];
        }

        if (isset($map['IsOb'])) {
            $model->isOb = $map['IsOb'];
        }

        if (isset($map['IsQualityCheck'])) {
            $model->isQualityCheck = $map['IsQualityCheck'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ObClid'])) {
            $model->obClid = $map['ObClid'];
        }

        if (isset($map['ObClidProperty'])) {
            $model->obClidProperty = $map['ObClidProperty'];
        }

        if (isset($map['ObClidType'])) {
            $model->obClidType = $map['ObClidType'];
        }

        if (isset($map['ObRecord'])) {
            $model->obRecord = $map['ObRecord'];
        }

        if (isset($map['Power'])) {
            $model->power = $map['Power'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WebrtcUrlType'])) {
            $model->webrtcUrlType = $map['WebrtcUrlType'];
        }

        if (isset($map['Wrapup'])) {
            $model->wrapup = $map['Wrapup'];
        }

        return $model;
    }
}
