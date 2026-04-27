<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAgentResponseBody\data;

use AlibabaCloud\Dara\Model;

class agent extends Model
{
    /**
     * @var int
     */
    public $active;

    /**
     * @var int
     */
    public $agentType;

    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var string
     */
    public $asrCallType;

    /**
     * @var string
     */
    public $bindTel;

    /**
     * @var int
     */
    public $bindTelType;

    /**
     * @var int
     */
    public $callPower;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $ibRecord;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isAsr;

    /**
     * @var string
     */
    public $isAxbCall;

    /**
     * @var int
     */
    public $isOb;

    /**
     * @var string
     */
    public $isObRemember;

    /**
     * @var string
     */
    public $loginTime;

    /**
     * @var string
     */
    public $mrcpProperty;

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
     * @var int
     */
    public $obClidType;

    /**
     * @var int
     */
    public $obRecord;

    /**
     * @var string
     */
    public $permitObPreviewTime;

    /**
     * @var int
     */
    public $power;

    /**
     * @var string
     */
    public $property;

    /**
     * @var string[]
     */
    public $queueList;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $webrtcUrlType;

    /**
     * @var int
     */
    public $wrapup;
    protected $_name = [
        'active' => 'Active',
        'agentType' => 'AgentType',
        'areaCode' => 'AreaCode',
        'asrCallType' => 'AsrCallType',
        'bindTel' => 'BindTel',
        'bindTelType' => 'BindTelType',
        'callPower' => 'CallPower',
        'cno' => 'Cno',
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'enterpriseId' => 'EnterpriseId',
        'ibRecord' => 'IbRecord',
        'id' => 'Id',
        'isAsr' => 'IsAsr',
        'isAxbCall' => 'IsAxbCall',
        'isOb' => 'IsOb',
        'isObRemember' => 'IsObRemember',
        'loginTime' => 'LoginTime',
        'mrcpProperty' => 'MrcpProperty',
        'name' => 'Name',
        'obClid' => 'ObClid',
        'obClidProperty' => 'ObClidProperty',
        'obClidType' => 'ObClidType',
        'obRecord' => 'ObRecord',
        'permitObPreviewTime' => 'PermitObPreviewTime',
        'power' => 'Power',
        'property' => 'Property',
        'queueList' => 'QueueList',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'webrtcUrlType' => 'WebrtcUrlType',
        'wrapup' => 'Wrapup',
    ];

    public function validate()
    {
        if (\is_array($this->queueList)) {
            Model::validateArray($this->queueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }

        if (null !== $this->asrCallType) {
            $res['AsrCallType'] = $this->asrCallType;
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

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
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

        if (null !== $this->isAxbCall) {
            $res['IsAxbCall'] = $this->isAxbCall;
        }

        if (null !== $this->isOb) {
            $res['IsOb'] = $this->isOb;
        }

        if (null !== $this->isObRemember) {
            $res['IsObRemember'] = $this->isObRemember;
        }

        if (null !== $this->loginTime) {
            $res['LoginTime'] = $this->loginTime;
        }

        if (null !== $this->mrcpProperty) {
            $res['MrcpProperty'] = $this->mrcpProperty;
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

        if (null !== $this->permitObPreviewTime) {
            $res['PermitObPreviewTime'] = $this->permitObPreviewTime;
        }

        if (null !== $this->power) {
            $res['Power'] = $this->power;
        }

        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }

        if (null !== $this->queueList) {
            if (\is_array($this->queueList)) {
                $res['QueueList'] = [];
                $n1 = 0;
                foreach ($this->queueList as $item1) {
                    $res['QueueList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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

        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }

        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }

        if (isset($map['AsrCallType'])) {
            $model->asrCallType = $map['AsrCallType'];
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

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
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

        if (isset($map['IsAxbCall'])) {
            $model->isAxbCall = $map['IsAxbCall'];
        }

        if (isset($map['IsOb'])) {
            $model->isOb = $map['IsOb'];
        }

        if (isset($map['IsObRemember'])) {
            $model->isObRemember = $map['IsObRemember'];
        }

        if (isset($map['LoginTime'])) {
            $model->loginTime = $map['LoginTime'];
        }

        if (isset($map['MrcpProperty'])) {
            $model->mrcpProperty = $map['MrcpProperty'];
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

        if (isset($map['PermitObPreviewTime'])) {
            $model->permitObPreviewTime = $map['PermitObPreviewTime'];
        }

        if (isset($map['Power'])) {
            $model->power = $map['Power'];
        }

        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }

        if (isset($map['QueueList'])) {
            if (!empty($map['QueueList'])) {
                $model->queueList = [];
                $n1 = 0;
                foreach ($map['QueueList'] as $item1) {
                    $model->queueList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
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
