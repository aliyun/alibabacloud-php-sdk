<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\PutSecretValueResponseBody\versionStages;

class PutSecretValueResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var versionStages
     */
    public $versionStages;
    protected $_name = [
        'requestId' => 'RequestId',
        'secretName' => 'SecretName',
        'versionId' => 'VersionId',
        'versionStages' => 'VersionStages',
    ];

    public function validate()
    {
        if (null !== $this->versionStages) {
            $this->versionStages->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['VersionStages'] = null !== $this->versionStages ? $this->versionStages->toArray($noStream) : $this->versionStages;
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
