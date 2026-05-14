<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class ClinkUpdateClientShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $active;

    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var int
     */
    public $assignType;

    /**
     * @var string
     */
    public $clidShrink;

    /**
     * @var string
     */
    public $clidAreaShrink;

    /**
     * @var string
     */
    public $clidDefaultShrink;

    /**
     * @var int
     */
    public $clidRule;

    /**
     * @var int
     */
    public $clidType;

    /**
     * @var int
     */
    public $cloudNumberEnabled;

    /**
     * @var string
     */
    public $cloudNumberModesShrink;

    /**
     * @var int
     */
    public $cno;

    /**
     * @var int
     */
    public $crmId;

    /**
     * @var int
     */
    public $dynamicTelGroupIdDefault;

    /**
     * @var string
     */
    public $dynamicTelGroupName;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $hiddenTel;

    /**
     * @var int
     */
    public $ibWrapupTime;

    /**
     * @var int
     */
    public $ibWrapupType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $obClidDefaultType;

    /**
     * @var int
     */
    public $obHangupSms;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $pauseLogin;

    /**
     * @var string
     */
    public $permissionShrink;

    /**
     * @var string
     */
    public $qnosShrink;

    /**
     * @var int
     */
    public $recurrentselectionType;

    /**
     * @var int
     */
    public $recurrentselectionValue;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $role;

    /**
     * @var string
     */
    public $serveAreaShrink;

    /**
     * @var int
     */
    public $wechatMiniProgramRtc;

    /**
     * @var int
     */
    public $wrapupTime;
    protected $_name = [
        'active' => 'Active',
        'areaCode' => 'AreaCode',
        'assignType' => 'AssignType',
        'clidShrink' => 'Clid',
        'clidAreaShrink' => 'ClidArea',
        'clidDefaultShrink' => 'ClidDefault',
        'clidRule' => 'ClidRule',
        'clidType' => 'ClidType',
        'cloudNumberEnabled' => 'CloudNumberEnabled',
        'cloudNumberModesShrink' => 'CloudNumberModes',
        'cno' => 'Cno',
        'crmId' => 'CrmId',
        'dynamicTelGroupIdDefault' => 'DynamicTelGroupIdDefault',
        'dynamicTelGroupName' => 'DynamicTelGroupName',
        'enterpriseId' => 'EnterpriseId',
        'hiddenTel' => 'HiddenTel',
        'ibWrapupTime' => 'IbWrapupTime',
        'ibWrapupType' => 'IbWrapupType',
        'name' => 'Name',
        'obClidDefaultType' => 'ObClidDefaultType',
        'obHangupSms' => 'ObHangupSms',
        'ownerId' => 'OwnerId',
        'password' => 'Password',
        'pauseLogin' => 'PauseLogin',
        'permissionShrink' => 'Permission',
        'qnosShrink' => 'Qnos',
        'recurrentselectionType' => 'RecurrentselectionType',
        'recurrentselectionValue' => 'RecurrentselectionValue',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'role' => 'Role',
        'serveAreaShrink' => 'ServeArea',
        'wechatMiniProgramRtc' => 'WechatMiniProgramRtc',
        'wrapupTime' => 'WrapupTime',
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

        if (null !== $this->assignType) {
            $res['AssignType'] = $this->assignType;
        }

        if (null !== $this->clidShrink) {
            $res['Clid'] = $this->clidShrink;
        }

        if (null !== $this->clidAreaShrink) {
            $res['ClidArea'] = $this->clidAreaShrink;
        }

        if (null !== $this->clidDefaultShrink) {
            $res['ClidDefault'] = $this->clidDefaultShrink;
        }

        if (null !== $this->clidRule) {
            $res['ClidRule'] = $this->clidRule;
        }

        if (null !== $this->clidType) {
            $res['ClidType'] = $this->clidType;
        }

        if (null !== $this->cloudNumberEnabled) {
            $res['CloudNumberEnabled'] = $this->cloudNumberEnabled;
        }

        if (null !== $this->cloudNumberModesShrink) {
            $res['CloudNumberModes'] = $this->cloudNumberModesShrink;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->crmId) {
            $res['CrmId'] = $this->crmId;
        }

        if (null !== $this->dynamicTelGroupIdDefault) {
            $res['DynamicTelGroupIdDefault'] = $this->dynamicTelGroupIdDefault;
        }

        if (null !== $this->dynamicTelGroupName) {
            $res['DynamicTelGroupName'] = $this->dynamicTelGroupName;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->hiddenTel) {
            $res['HiddenTel'] = $this->hiddenTel;
        }

        if (null !== $this->ibWrapupTime) {
            $res['IbWrapupTime'] = $this->ibWrapupTime;
        }

        if (null !== $this->ibWrapupType) {
            $res['IbWrapupType'] = $this->ibWrapupType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->obClidDefaultType) {
            $res['ObClidDefaultType'] = $this->obClidDefaultType;
        }

        if (null !== $this->obHangupSms) {
            $res['ObHangupSms'] = $this->obHangupSms;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->pauseLogin) {
            $res['PauseLogin'] = $this->pauseLogin;
        }

        if (null !== $this->permissionShrink) {
            $res['Permission'] = $this->permissionShrink;
        }

        if (null !== $this->qnosShrink) {
            $res['Qnos'] = $this->qnosShrink;
        }

        if (null !== $this->recurrentselectionType) {
            $res['RecurrentselectionType'] = $this->recurrentselectionType;
        }

        if (null !== $this->recurrentselectionValue) {
            $res['RecurrentselectionValue'] = $this->recurrentselectionValue;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->serveAreaShrink) {
            $res['ServeArea'] = $this->serveAreaShrink;
        }

        if (null !== $this->wechatMiniProgramRtc) {
            $res['WechatMiniProgramRtc'] = $this->wechatMiniProgramRtc;
        }

        if (null !== $this->wrapupTime) {
            $res['WrapupTime'] = $this->wrapupTime;
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

        if (isset($map['AssignType'])) {
            $model->assignType = $map['AssignType'];
        }

        if (isset($map['Clid'])) {
            $model->clidShrink = $map['Clid'];
        }

        if (isset($map['ClidArea'])) {
            $model->clidAreaShrink = $map['ClidArea'];
        }

        if (isset($map['ClidDefault'])) {
            $model->clidDefaultShrink = $map['ClidDefault'];
        }

        if (isset($map['ClidRule'])) {
            $model->clidRule = $map['ClidRule'];
        }

        if (isset($map['ClidType'])) {
            $model->clidType = $map['ClidType'];
        }

        if (isset($map['CloudNumberEnabled'])) {
            $model->cloudNumberEnabled = $map['CloudNumberEnabled'];
        }

        if (isset($map['CloudNumberModes'])) {
            $model->cloudNumberModesShrink = $map['CloudNumberModes'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CrmId'])) {
            $model->crmId = $map['CrmId'];
        }

        if (isset($map['DynamicTelGroupIdDefault'])) {
            $model->dynamicTelGroupIdDefault = $map['DynamicTelGroupIdDefault'];
        }

        if (isset($map['DynamicTelGroupName'])) {
            $model->dynamicTelGroupName = $map['DynamicTelGroupName'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['HiddenTel'])) {
            $model->hiddenTel = $map['HiddenTel'];
        }

        if (isset($map['IbWrapupTime'])) {
            $model->ibWrapupTime = $map['IbWrapupTime'];
        }

        if (isset($map['IbWrapupType'])) {
            $model->ibWrapupType = $map['IbWrapupType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ObClidDefaultType'])) {
            $model->obClidDefaultType = $map['ObClidDefaultType'];
        }

        if (isset($map['ObHangupSms'])) {
            $model->obHangupSms = $map['ObHangupSms'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['PauseLogin'])) {
            $model->pauseLogin = $map['PauseLogin'];
        }

        if (isset($map['Permission'])) {
            $model->permissionShrink = $map['Permission'];
        }

        if (isset($map['Qnos'])) {
            $model->qnosShrink = $map['Qnos'];
        }

        if (isset($map['RecurrentselectionType'])) {
            $model->recurrentselectionType = $map['RecurrentselectionType'];
        }

        if (isset($map['RecurrentselectionValue'])) {
            $model->recurrentselectionValue = $map['RecurrentselectionValue'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['ServeArea'])) {
            $model->serveAreaShrink = $map['ServeArea'];
        }

        if (isset($map['WechatMiniProgramRtc'])) {
            $model->wechatMiniProgramRtc = $map['WechatMiniProgramRtc'];
        }

        if (isset($map['WrapupTime'])) {
            $model->wrapupTime = $map['WrapupTime'];
        }

        return $model;
    }
}
