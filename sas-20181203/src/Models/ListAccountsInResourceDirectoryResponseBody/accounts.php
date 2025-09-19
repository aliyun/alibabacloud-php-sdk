<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAccountsInResourceDirectoryResponseBody;

use AlibabaCloud\Dara\Model;

class accounts extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $buySas;

    /**
     * @var bool
     */
    public $buySasNew;

    /**
     * @var int
     */
    public $chargeType;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var int
     */
    public $instanceBuyType;

    /**
     * @var string
     */
    public $isMaAccount;

    /**
     * @var string
     */
    public $isMarked;

    /**
     * @var string
     */
    public $isSasDaAccount;

    /**
     * @var string
     */
    public $isSiemControlAccount;

    /**
     * @var string
     */
    public $isSiemDaAccount;

    /**
     * @var string
     */
    public $postPayModuleSwitch;

    /**
     * @var string
     */
    public $saleInstance;

    /**
     * @var string
     */
    public $sasVersion;
    protected $_name = [
        'accountId' => 'AccountId',
        'buySas' => 'BuySas',
        'buySasNew' => 'BuySasNew',
        'chargeType' => 'ChargeType',
        'displayName' => 'DisplayName',
        'folderId' => 'FolderId',
        'instanceBuyType' => 'InstanceBuyType',
        'isMaAccount' => 'IsMaAccount',
        'isMarked' => 'IsMarked',
        'isSasDaAccount' => 'IsSasDaAccount',
        'isSiemControlAccount' => 'IsSiemControlAccount',
        'isSiemDaAccount' => 'IsSiemDaAccount',
        'postPayModuleSwitch' => 'PostPayModuleSwitch',
        'saleInstance' => 'SaleInstance',
        'sasVersion' => 'SasVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->buySas) {
            $res['BuySas'] = $this->buySas;
        }

        if (null !== $this->buySasNew) {
            $res['BuySasNew'] = $this->buySasNew;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->instanceBuyType) {
            $res['InstanceBuyType'] = $this->instanceBuyType;
        }

        if (null !== $this->isMaAccount) {
            $res['IsMaAccount'] = $this->isMaAccount;
        }

        if (null !== $this->isMarked) {
            $res['IsMarked'] = $this->isMarked;
        }

        if (null !== $this->isSasDaAccount) {
            $res['IsSasDaAccount'] = $this->isSasDaAccount;
        }

        if (null !== $this->isSiemControlAccount) {
            $res['IsSiemControlAccount'] = $this->isSiemControlAccount;
        }

        if (null !== $this->isSiemDaAccount) {
            $res['IsSiemDaAccount'] = $this->isSiemDaAccount;
        }

        if (null !== $this->postPayModuleSwitch) {
            $res['PostPayModuleSwitch'] = $this->postPayModuleSwitch;
        }

        if (null !== $this->saleInstance) {
            $res['SaleInstance'] = $this->saleInstance;
        }

        if (null !== $this->sasVersion) {
            $res['SasVersion'] = $this->sasVersion;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['BuySas'])) {
            $model->buySas = $map['BuySas'];
        }

        if (isset($map['BuySasNew'])) {
            $model->buySasNew = $map['BuySasNew'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['InstanceBuyType'])) {
            $model->instanceBuyType = $map['InstanceBuyType'];
        }

        if (isset($map['IsMaAccount'])) {
            $model->isMaAccount = $map['IsMaAccount'];
        }

        if (isset($map['IsMarked'])) {
            $model->isMarked = $map['IsMarked'];
        }

        if (isset($map['IsSasDaAccount'])) {
            $model->isSasDaAccount = $map['IsSasDaAccount'];
        }

        if (isset($map['IsSiemControlAccount'])) {
            $model->isSiemControlAccount = $map['IsSiemControlAccount'];
        }

        if (isset($map['IsSiemDaAccount'])) {
            $model->isSiemDaAccount = $map['IsSiemDaAccount'];
        }

        if (isset($map['PostPayModuleSwitch'])) {
            $model->postPayModuleSwitch = $map['PostPayModuleSwitch'];
        }

        if (isset($map['SaleInstance'])) {
            $model->saleInstance = $map['SaleInstance'];
        }

        if (isset($map['SasVersion'])) {
            $model->sasVersion = $map['SasVersion'];
        }

        return $model;
    }
}
