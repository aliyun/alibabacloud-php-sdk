<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class OssUploadCredential extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;
    /**
     * @var string
     */
    public $endpoint;
    /**
     * @var string
     */
    public $filePath;
    /**
     * @var string
     */
    public $ossPolicy;
    /**
     * @var string
     */
    public $ossSignature;
    /**
     * @var string
     */
    public $stsToken;
    protected $_name = [
        'accessKeyId'  => 'AccessKeyId',
        'endpoint'     => 'Endpoint',
        'filePath'     => 'FilePath',
        'ossPolicy'    => 'OssPolicy',
        'ossSignature' => 'OssSignature',
        'stsToken'     => 'StsToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->ossPolicy) {
            $res['OssPolicy'] = $this->ossPolicy;
        }

        if (null !== $this->ossSignature) {
            $res['OssSignature'] = $this->ossSignature;
        }

        if (null !== $this->stsToken) {
            $res['StsToken'] = $this->stsToken;
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
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['OssPolicy'])) {
            $model->ossPolicy = $map['OssPolicy'];
        }

        if (isset($map['OssSignature'])) {
            $model->ossSignature = $map['OssSignature'];
        }

        if (isset($map['StsToken'])) {
            $model->stsToken = $map['StsToken'];
        }

        return $model;
    }
}
