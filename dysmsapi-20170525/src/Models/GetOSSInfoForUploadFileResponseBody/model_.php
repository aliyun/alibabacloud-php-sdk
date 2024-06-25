<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetOSSInfoForUploadFileResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example LTAIxetqt1Dg****
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @example 1719297445
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example https://alicom-fc-media.oss-cn-zhangjiakou.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @example eyJleHBpcmF0aW9uIjoiMjAyN***Ni0yNVQwNjozNzoyNS45NzBaI**iY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsMTA0ODU3NjAwMF0sWyJzdGFydHMtd2l0***sIiRrZXkiLCIiXV19
     *
     * @var string
     */
    public $policy;

    /**
     * @example BXnwCWPrhVb*****aoZHZfli5KE=
     *
     * @var string
     */
    public $signature;

    /**
     * @example 123456
     *
     * @var string
     */
    public $startPath;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'expireTime'  => 'ExpireTime',
        'host'        => 'Host',
        'policy'      => 'Policy',
        'signature'   => 'Signature',
        'startPath'   => 'StartPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->startPath) {
            $res['StartPath'] = $this->startPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['StartPath'])) {
            $model->startPath = $map['StartPath'];
        }

        return $model;
    }
}
