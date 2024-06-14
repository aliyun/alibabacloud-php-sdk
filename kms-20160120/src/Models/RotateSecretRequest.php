<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class RotateSecretRequest extends Model
{
    /**
     * @description The name of the secret.
     *
     * This parameter is required.
     * @example RdsSecret/Mysql5.4/MyCred
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The version number of the secret after the secret is rotated.
     *
     * This parameter is required.
     * @example 000000123
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'secretName' => 'SecretName',
        'versionId'  => 'VersionId',
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
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RotateSecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
