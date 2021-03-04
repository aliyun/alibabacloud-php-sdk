<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetSecretValueRequest extends Model
{
    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $versionStage;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var bool
     */
    public $fetchExtendedConfig;
    protected $_name = [
        'secretName'          => 'SecretName',
        'versionStage'        => 'VersionStage',
        'versionId'           => 'VersionId',
        'fetchExtendedConfig' => 'FetchExtendedConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->versionStage) {
            $res['VersionStage'] = $this->versionStage;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->fetchExtendedConfig) {
            $res['FetchExtendedConfig'] = $this->fetchExtendedConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSecretValueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['VersionStage'])) {
            $model->versionStage = $map['VersionStage'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['FetchExtendedConfig'])) {
            $model->fetchExtendedConfig = $map['FetchExtendedConfig'];
        }

        return $model;
    }
}
