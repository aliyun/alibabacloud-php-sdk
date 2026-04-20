<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceForPartnerResponseBody\module\appServiceList;

use AlibabaCloud\Dara\Model;

class profile extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $designType;

    /**
     * @var string
     */
    public $designTypeText;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $lxInstanceId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $serviceSpec;

    /**
     * @var string
     */
    public $serviceSpecText;

    /**
     * @var string
     */
    public $upgradeStatus;
    protected $_name = [
        'bizId' => 'BizId',
        'designType' => 'DesignType',
        'designTypeText' => 'DesignTypeText',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'lxInstanceId' => 'LxInstanceId',
        'orderId' => 'OrderId',
        'serviceSpec' => 'ServiceSpec',
        'serviceSpecText' => 'ServiceSpecText',
        'upgradeStatus' => 'UpgradeStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->designType) {
            $res['DesignType'] = $this->designType;
        }

        if (null !== $this->designTypeText) {
            $res['DesignTypeText'] = $this->designTypeText;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lxInstanceId) {
            $res['LxInstanceId'] = $this->lxInstanceId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->serviceSpec) {
            $res['ServiceSpec'] = $this->serviceSpec;
        }

        if (null !== $this->serviceSpecText) {
            $res['ServiceSpecText'] = $this->serviceSpecText;
        }

        if (null !== $this->upgradeStatus) {
            $res['UpgradeStatus'] = $this->upgradeStatus;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['DesignType'])) {
            $model->designType = $map['DesignType'];
        }

        if (isset($map['DesignTypeText'])) {
            $model->designTypeText = $map['DesignTypeText'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LxInstanceId'])) {
            $model->lxInstanceId = $map['LxInstanceId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['ServiceSpec'])) {
            $model->serviceSpec = $map['ServiceSpec'];
        }

        if (isset($map['ServiceSpecText'])) {
            $model->serviceSpecText = $map['ServiceSpecText'];
        }

        if (isset($map['UpgradeStatus'])) {
            $model->upgradeStatus = $map['UpgradeStatus'];
        }

        return $model;
    }
}
