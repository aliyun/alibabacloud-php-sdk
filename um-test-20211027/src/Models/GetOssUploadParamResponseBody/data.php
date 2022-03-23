<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umtest\V20211027\Models\GetOssUploadParamResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 文件上传表单必要参数
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description 文件上传表单必要参数
     *
     * @var string
     */
    public $callback;

    /**
     * @description 文件上传表单必要参数
     *
     * @var string
     */
    public $key;

    /**
     * @description 文件上传表单必要参数
     *
     * @var string
     */
    public $policy;

    /**
     * @description 文件上传表单必要参数
     *
     * @var string
     */
    public $signature;

    /**
     * @description 文件上传地址
     *
     * @var string
     */
    public $uploadAddress;
    protected $_name = [
        'accessKeyId'   => 'accessKeyId',
        'callback'      => 'callback',
        'key'           => 'key',
        'policy'        => 'policy',
        'signature'     => 'signature',
        'uploadAddress' => 'uploadAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->callback) {
            $res['callback'] = $this->callback;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }
        if (null !== $this->uploadAddress) {
            $res['uploadAddress'] = $this->uploadAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }
        if (isset($map['callback'])) {
            $model->callback = $map['callback'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }
        if (isset($map['uploadAddress'])) {
            $model->uploadAddress = $map['uploadAddress'];
        }

        return $model;
    }
}
