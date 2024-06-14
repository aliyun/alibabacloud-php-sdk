<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class PutSecretValueRequest extends Model
{
    /**
     * @description The secret value. The value is encrypted and then stored in the new version.
     *
     * This parameter is required.
     * @example importantdata
     *
     * @var string
     */
    public $secretData;

    /**
     * @description The type of the secret value. Valid values:
     *
     *   text: This is the default value.
     *   binary
     *
     * @example text
     *
     * @var string
     */
    public $secretDataType;

    /**
     * @description The name of the secret.
     *
     * This parameter is required.
     * @example secret001
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The new version of the secret value. Version numbers must be unique in each secret.
     *
     * This parameter is required.
     * @example 00000000000000000000000000000000203
     *
     * @var string
     */
    public $versionId;

    /**
     * @description The stage labels that are used to mark the new version. If you do not specify this parameter, Secrets Manager marks the new version with ACSCurrent.
     *
     * @example ["ACSCurrent","ACSNext"]
     *
     * @var string
     */
    public $versionStages;
    protected $_name = [
        'secretData'     => 'SecretData',
        'secretDataType' => 'SecretDataType',
        'secretName'     => 'SecretName',
        'versionId'      => 'VersionId',
        'versionStages'  => 'VersionStages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretData) {
            $res['SecretData'] = $this->secretData;
        }
        if (null !== $this->secretDataType) {
            $res['SecretDataType'] = $this->secretDataType;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->versionStages) {
            $res['VersionStages'] = $this->versionStages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutSecretValueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretData'])) {
            $model->secretData = $map['SecretData'];
        }
        if (isset($map['SecretDataType'])) {
            $model->secretDataType = $map['SecretDataType'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['VersionStages'])) {
            $model->versionStages = $map['VersionStages'];
        }

        return $model;
    }
}
