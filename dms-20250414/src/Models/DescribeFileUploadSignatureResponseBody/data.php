<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\DescribeFileUploadSignatureResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ossCredential;

    /**
     * @var string
     */
    public $ossDate;

    /**
     * @var string
     */
    public $ossSecurityToken;

    /**
     * @var string
     */
    public $ossSignature;

    /**
     * @var string
     */
    public $ossSignatureVersion;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $uploadDir;

    /**
     * @var string
     */
    public $uploadHost;
    protected $_name = [
        'ossCredential' => 'OssCredential',
        'ossDate' => 'OssDate',
        'ossSecurityToken' => 'OssSecurityToken',
        'ossSignature' => 'OssSignature',
        'ossSignatureVersion' => 'OssSignatureVersion',
        'policy' => 'Policy',
        'uploadDir' => 'UploadDir',
        'uploadHost' => 'UploadHost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossCredential) {
            $res['OssCredential'] = $this->ossCredential;
        }

        if (null !== $this->ossDate) {
            $res['OssDate'] = $this->ossDate;
        }

        if (null !== $this->ossSecurityToken) {
            $res['OssSecurityToken'] = $this->ossSecurityToken;
        }

        if (null !== $this->ossSignature) {
            $res['OssSignature'] = $this->ossSignature;
        }

        if (null !== $this->ossSignatureVersion) {
            $res['OssSignatureVersion'] = $this->ossSignatureVersion;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->uploadDir) {
            $res['UploadDir'] = $this->uploadDir;
        }

        if (null !== $this->uploadHost) {
            $res['UploadHost'] = $this->uploadHost;
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
        if (isset($map['OssCredential'])) {
            $model->ossCredential = $map['OssCredential'];
        }

        if (isset($map['OssDate'])) {
            $model->ossDate = $map['OssDate'];
        }

        if (isset($map['OssSecurityToken'])) {
            $model->ossSecurityToken = $map['OssSecurityToken'];
        }

        if (isset($map['OssSignature'])) {
            $model->ossSignature = $map['OssSignature'];
        }

        if (isset($map['OssSignatureVersion'])) {
            $model->ossSignatureVersion = $map['OssSignatureVersion'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['UploadDir'])) {
            $model->uploadDir = $map['UploadDir'];
        }

        if (isset($map['UploadHost'])) {
            $model->uploadHost = $map['UploadHost'];
        }

        return $model;
    }
}
