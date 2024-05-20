<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class UploadInfo extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $accessId;

    /**
     * @description This parameter is required.
     *
     * @example yic-pre.oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @description This parameter is required.
     *
     * @example 1234/temp-novels/xxxx-xxx-xx.txt
     *
     * @var string
     */
    public $key;

    /**
     * @description This parameter is required.
     *
     * @example xxxxxxxx
     *
     * @var string
     */
    public $policy;

    /**
     * @description This parameter is required.
     *
     * @example xxxxxxx
     *
     * @var string
     */
    public $policySignature;

    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'accessId'        => 'accessId',
        'host'            => 'host',
        'key'             => 'key',
        'policy'          => 'policy',
        'policySignature' => 'policySignature',
        'url'             => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['accessId'] = $this->accessId;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }
        if (null !== $this->policySignature) {
            $res['policySignature'] = $this->policySignature;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessId'])) {
            $model->accessId = $map['accessId'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }
        if (isset($map['policySignature'])) {
            $model->policySignature = $map['policySignature'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
