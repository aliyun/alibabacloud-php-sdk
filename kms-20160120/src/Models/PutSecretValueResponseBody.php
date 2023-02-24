<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\PutSecretValueResponseBody\versionStages;
use AlibabaCloud\Tea\Model;

class PutSecretValueResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example f94ec9d3-2d10-4922-9a5c-5dcd5ebcb5e8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the secret.
     *
     * @example secret001
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The new version of the secret value.
     *
     * @example 00000000000000000000000000000000203
     *
     * @var string
     */
    public $versionId;

    /**
     * @description The stage labels that are used to mark the new version.
     *
     * @var versionStages
     */
    public $versionStages;
    protected $_name = [
        'requestId'     => 'RequestId',
        'secretName'    => 'SecretName',
        'versionId'     => 'VersionId',
        'versionStages' => 'VersionStages',
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
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->versionStages) {
            $res['VersionStages'] = null !== $this->versionStages ? $this->versionStages->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutSecretValueResponseBody
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
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['VersionStages'])) {
            $model->versionStages = versionStages::fromMap($map['VersionStages']);
        }

        return $model;
    }
}
