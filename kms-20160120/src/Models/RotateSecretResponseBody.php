<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class RotateSecretResponseBody extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the secret.
     *
     * @example acs:kms:cn-hangzhou:154035569884****:secret/RdsSecret/Mysql5.4/MyCred
     *
     * @var string
     */
    public $arn;

    /**
     * @description The ID of the request.
     *
     * @example 10257c86-269d-43aa-aaf3-90ed4144bb7c
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the secret.
     *
     * @example RdsSecret/Mysql5.4/MyCred
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The version number of the secret after the secret is rotated.
     *
     * @example 000000123
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'arn'        => 'Arn',
        'requestId'  => 'RequestId',
        'secretName' => 'SecretName',
        'versionId'  => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
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
     * @return RotateSecretResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
