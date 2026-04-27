<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudUpdateAgentRequest extends Model
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
    public $isAsr;

    /**
     * @var int
     */
    public $isOb;

    /**
     * @var string
     */
    public $isObRemember;

    /**
     * @var int
     */
    public $isQualityCheck;

    /**
     * @var string
     */
    public $isRandom;

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
     * @var int
     */
    public $ownerId;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $skillIds;

    /**
     * @var string
     */
    public $skillLevels;

    /**
     * @var int
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
        'callPower' => 'CallPower',
        'cno' => 'Cno',
        'comment' => 'Comment',
        'enterpriseId' => 'EnterpriseId',
        'ibRecord' => 'IbRecord',
        'isAsr' => 'IsAsr',
        'isOb' => 'IsOb',
        'isObRemember' => 'IsObRemember',
        'isQualityCheck' => 'IsQualityCheck',
        'isRandom' => 'IsRandom',
        'name' => 'Name',
        'obClid' => 'ObClid',
        'obClidProperty' => 'ObClidProperty',
        'obClidType' => 'ObClidType',
        'obRecord' => 'ObRecord',
        'ownerId' => 'OwnerId',
        'permitObPreviewTime' => 'PermitObPreviewTime',
        'power' => 'Power',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'skillIds' => 'SkillIds',
        'skillLevels' => 'SkillLevels',
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

        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
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

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->ibRecord) {
            $res['IbRecord'] = $this->ibRecord;
        }

        if (null !== $this->isAsr) {
            $res['IsAsr'] = $this->isAsr;
        }

        if (null !== $this->isOb) {
            $res['IsOb'] = $this->isOb;
        }

        if (null !== $this->isObRemember) {
            $res['IsObRemember'] = $this->isObRemember;
        }

        if (null !== $this->isQualityCheck) {
            $res['IsQualityCheck'] = $this->isQualityCheck;
        }

        if (null !== $this->isRandom) {
            $res['IsRandom'] = $this->isRandom;
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

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->permitObPreviewTime) {
            $res['PermitObPreviewTime'] = $this->permitObPreviewTime;
        }

        if (null !== $this->power) {
            $res['Power'] = $this->power;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->skillIds) {
            $res['SkillIds'] = $this->skillIds;
        }

        if (null !== $this->skillLevels) {
            $res['SkillLevels'] = $this->skillLevels;
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

        if (isset($map['CallPower'])) {
            $model->callPower = $map['CallPower'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['IbRecord'])) {
            $model->ibRecord = $map['IbRecord'];
        }

        if (isset($map['IsAsr'])) {
            $model->isAsr = $map['IsAsr'];
        }

        if (isset($map['IsOb'])) {
            $model->isOb = $map['IsOb'];
        }

        if (isset($map['IsObRemember'])) {
            $model->isObRemember = $map['IsObRemember'];
        }

        if (isset($map['IsQualityCheck'])) {
            $model->isQualityCheck = $map['IsQualityCheck'];
        }

        if (isset($map['IsRandom'])) {
            $model->isRandom = $map['IsRandom'];
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

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PermitObPreviewTime'])) {
            $model->permitObPreviewTime = $map['PermitObPreviewTime'];
        }

        if (isset($map['Power'])) {
            $model->power = $map['Power'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SkillIds'])) {
            $model->skillIds = $map['SkillIds'];
        }

        if (isset($map['SkillLevels'])) {
            $model->skillLevels = $map['SkillLevels'];
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
