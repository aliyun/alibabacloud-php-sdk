<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class GetSecretValueRequest extends Model
{
    /**
     * @var string
     */
    public $dryRun;

    /**
     * @var bool
     */
    public $fetchExtendedConfig;

    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $versionStage;
    protected $_name = [
        'dryRun' => 'DryRun',
        'fetchExtendedConfig' => 'FetchExtendedConfig',
        'secretName' => 'SecretName',
        'versionId' => 'VersionId',
        'versionStage' => 'VersionStage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->fetchExtendedConfig) {
            $res['FetchExtendedConfig'] = $this->fetchExtendedConfig;
        }

        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        if (null !== $this->versionStage) {
            $res['VersionStage'] = $this->versionStage;
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['FetchExtendedConfig'])) {
            $model->fetchExtendedConfig = $map['FetchExtendedConfig'];
        }

        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        if (isset($map['VersionStage'])) {
            $model->versionStage = $map['VersionStage'];
        }

        return $model;
    }
}
