<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class SetCustomerConfigRequest extends Model
{
    /**
     * @var string
     */
    public $AIConfig;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $auditConfig;

    /**
     * @var string
     */
    public $downloadSwitch;

    /**
     * @var string
     */
    public $metricConfig;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'AIConfig' => 'AIConfig',
        'appId' => 'AppId',
        'auditConfig' => 'AuditConfig',
        'downloadSwitch' => 'DownloadSwitch',
        'metricConfig' => 'MetricConfig',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIConfig) {
            $res['AIConfig'] = $this->AIConfig;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->auditConfig) {
            $res['AuditConfig'] = $this->auditConfig;
        }

        if (null !== $this->downloadSwitch) {
            $res['DownloadSwitch'] = $this->downloadSwitch;
        }

        if (null !== $this->metricConfig) {
            $res['MetricConfig'] = $this->metricConfig;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['AIConfig'])) {
            $model->AIConfig = $map['AIConfig'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AuditConfig'])) {
            $model->auditConfig = $map['AuditConfig'];
        }

        if (isset($map['DownloadSwitch'])) {
            $model->downloadSwitch = $map['DownloadSwitch'];
        }

        if (isset($map['MetricConfig'])) {
            $model->metricConfig = $map['MetricConfig'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
