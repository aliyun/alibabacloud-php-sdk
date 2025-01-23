<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class CreateClientsRequest extends Model
{
    /**
     * @var string
     */
    public $alertSetting;
    /**
     * @var string
     */
    public $clientInfo;
    /**
     * @var string
     */
    public $crossAccountRoleName;
    /**
     * @var string
     */
    public $crossAccountType;
    /**
     * @var int
     */
    public $crossAccountUserId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var bool
     */
    public $useHttps;
    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'alertSetting'         => 'AlertSetting',
        'clientInfo'           => 'ClientInfo',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType'     => 'CrossAccountType',
        'crossAccountUserId'   => 'CrossAccountUserId',
        'resourceGroupId'      => 'ResourceGroupId',
        'useHttps'             => 'UseHttps',
        'vaultId'              => 'VaultId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertSetting) {
            $res['AlertSetting'] = $this->alertSetting;
        }

        if (null !== $this->clientInfo) {
            $res['ClientInfo'] = $this->clientInfo;
        }

        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }

        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }

        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->useHttps) {
            $res['UseHttps'] = $this->useHttps;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
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
        if (isset($map['AlertSetting'])) {
            $model->alertSetting = $map['AlertSetting'];
        }

        if (isset($map['ClientInfo'])) {
            $model->clientInfo = $map['ClientInfo'];
        }

        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }

        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }

        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['UseHttps'])) {
            $model->useHttps = $map['UseHttps'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
