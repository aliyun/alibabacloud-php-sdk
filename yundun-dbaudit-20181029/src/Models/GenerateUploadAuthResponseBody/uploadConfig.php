<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\GenerateUploadAuthResponseBody;

use AlibabaCloud\Tea\Model;

class uploadConfig extends Model
{
    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $uploadHost;

    /**
     * @var string
     */
    public $accessId;
    protected $_name = [
        'signature'  => 'Signature',
        'filePath'   => 'FilePath',
        'policy'     => 'Policy',
        'expireTime' => 'ExpireTime',
        'uploadHost' => 'UploadHost',
        'accessId'   => 'AccessId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->uploadHost) {
            $res['UploadHost'] = $this->uploadHost;
        }
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uploadConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['UploadHost'])) {
            $model->uploadHost = $map['UploadHost'];
        }
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }

        return $model;
    }
}
