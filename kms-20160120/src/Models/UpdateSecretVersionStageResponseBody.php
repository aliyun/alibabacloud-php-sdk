<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UpdateSecretVersionStageResponseBody extends Model
{
    /**
     * @description The name of the secret.
     *
     * @example 8cad259f-4d77-40ec-bbd7-b9c47a423bb9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The version to which you want to apply the specified stage label.
     *
     * > * You must specify at least one of the RemoveFromVersion and MoveToVersion parameters.
     * > * If the VersionStage parameter is set to ACSCurrent or ACSPrevious, this parameter is required.
     * @example secret001
     *
     * @var string
     */
    public $secretName;
    protected $_name = [
        'requestId'  => 'RequestId',
        'secretName' => 'SecretName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSecretVersionStageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
