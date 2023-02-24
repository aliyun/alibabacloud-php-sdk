<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetSecretValueRequest extends Model
{
    /**
     * @description Specifies whether to obtain the extended configuration of the secret. Valid values:
     *
     *   true
     *   false: This is the default value.
     *
     * >  This parameter is ignored for a generic secret.
     * @example true
     *
     * @var bool
     */
    public $fetchExtendedConfig;

    /**
     * @description The name of the secret.
     *
     * @example secret001
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The version number of the secret value. If you specify this parameter, Secrets Manager returns the secret value of the specified version.
     *
     * >  This parameter is ignored for a managed ApsaraDB RDS secret, a managed RAM secret, or a managed ECS secret.
     * @example 00000000000000000000000000000001
     *
     * @var string
     */
    public $versionId;

    /**
     * @description The stage label that marks the secret version. If you specify this parameter, Secrets Manager returns the secret value of the version that is marked with the specified stage label.
     *
     * >  For a managed ApsaraDB RDS secret, a managed RAM secret, or a managed ECS secret, Secrets Manager can return only the secret value of the version marked with ACSPrevious or ACSCurrent.
     * @example ACSCurrent
     *
     * @var string
     */
    public $versionStage;
    protected $_name = [
        'fetchExtendedConfig' => 'FetchExtendedConfig',
        'secretName'          => 'SecretName',
        'versionId'           => 'VersionId',
        'versionStage'        => 'VersionStage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return GetSecretValueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
