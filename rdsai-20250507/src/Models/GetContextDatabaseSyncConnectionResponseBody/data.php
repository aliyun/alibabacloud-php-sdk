<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncConnectionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authKind;

    /**
     * @var string
     */
    public $authState;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $remediation;

    /**
     * @var mixed[]
     */
    public $scopeReport;

    /**
     * @var string
     */
    public $secretFingerprint;

    /**
     * @var string
     */
    public $secretUpdatedAt;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $verifiedAt;
    protected $_name = [
        'authKind' => 'AuthKind',
        'authState' => 'AuthState',
        'createdAt' => 'CreatedAt',
        'displayName' => 'DisplayName',
        'id' => 'Id',
        'pluginId' => 'PluginId',
        'remediation' => 'Remediation',
        'scopeReport' => 'ScopeReport',
        'secretFingerprint' => 'SecretFingerprint',
        'secretUpdatedAt' => 'SecretUpdatedAt',
        'updatedAt' => 'UpdatedAt',
        'verifiedAt' => 'VerifiedAt',
    ];

    public function validate()
    {
        if (\is_array($this->scopeReport)) {
            Model::validateArray($this->scopeReport);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authKind) {
            $res['AuthKind'] = $this->authKind;
        }

        if (null !== $this->authState) {
            $res['AuthState'] = $this->authState;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }

        if (null !== $this->remediation) {
            $res['Remediation'] = $this->remediation;
        }

        if (null !== $this->scopeReport) {
            if (\is_array($this->scopeReport)) {
                $res['ScopeReport'] = [];
                foreach ($this->scopeReport as $key1 => $value1) {
                    $res['ScopeReport'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->secretFingerprint) {
            $res['SecretFingerprint'] = $this->secretFingerprint;
        }

        if (null !== $this->secretUpdatedAt) {
            $res['SecretUpdatedAt'] = $this->secretUpdatedAt;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        if (null !== $this->verifiedAt) {
            $res['VerifiedAt'] = $this->verifiedAt;
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
        if (isset($map['AuthKind'])) {
            $model->authKind = $map['AuthKind'];
        }

        if (isset($map['AuthState'])) {
            $model->authState = $map['AuthState'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }

        if (isset($map['Remediation'])) {
            $model->remediation = $map['Remediation'];
        }

        if (isset($map['ScopeReport'])) {
            if (!empty($map['ScopeReport'])) {
                $model->scopeReport = [];
                foreach ($map['ScopeReport'] as $key1 => $value1) {
                    $model->scopeReport[$key1] = $value1;
                }
            }
        }

        if (isset($map['SecretFingerprint'])) {
            $model->secretFingerprint = $map['SecretFingerprint'];
        }

        if (isset($map['SecretUpdatedAt'])) {
            $model->secretUpdatedAt = $map['SecretUpdatedAt'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        if (isset($map['VerifiedAt'])) {
            $model->verifiedAt = $map['VerifiedAt'];
        }

        return $model;
    }
}
