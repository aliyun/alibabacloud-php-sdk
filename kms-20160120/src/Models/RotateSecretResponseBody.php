<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class RotateSecretResponseBody extends Model
{
    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $arn;
    protected $_name = [
        'versionId'  => 'VersionId',
        'secretName' => 'SecretName',
        'requestId'  => 'RequestId',
        'arn'        => 'Arn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
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
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        return $model;
    }
}
