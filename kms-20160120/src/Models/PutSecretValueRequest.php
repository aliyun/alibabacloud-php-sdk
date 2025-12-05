<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class PutSecretValueRequest extends Model
{
    /**
     * @var string
     */
    public $secretData;

    /**
     * @var string
     */
    public $secretDataType;

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
    public $versionStages;
    protected $_name = [
        'secretData' => 'SecretData',
        'secretDataType' => 'SecretDataType',
        'secretName' => 'SecretName',
        'versionId' => 'VersionId',
        'versionStages' => 'VersionStages',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
