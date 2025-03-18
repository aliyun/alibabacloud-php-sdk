<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Tea\Model;

class DescribeScreenOssUploadInfoResponseBody extends Model
{
    /**
     * @example LTAI5txxxxxxx
     *
     * @var string
     */
    public $accessId;

    /**
     * @example 1719919893
     *
     * @var int
     */
    public $expire;

    /**
     * @example https://oss-cipxxxxxxxxxliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @example DegradePool_Offset_****
     *
     * @var string
     */
    public $key;

    /**
     * @example eyJleHBpcmF0aW9uIjoiMjAyNC0wOC0xNVQwOToxMTo1My40MDVaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsMTA0ODU3NjAwMF0sWyJzdGFydHMtd2l0aCIsIiRrZXkiLCJzY3JlZW5Mb2dvXC8xNzY2MTg1ODkxxxx
     *
     * @var string
     */
    public $policy;

    /**
     * @example 30CBF632-109F-596F-97F2-451C8B2A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example wBiwkhd5LGcLzijtc3FhI****
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId' => 'AccessId',
        'expire' => 'Expire',
        'host' => 'Host',
        'key' => 'Key',
        'policy' => 'Policy',
        'requestId' => 'RequestId',
        'securityToken' => 'SecurityToken',
        'signature' => 'Signature',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenOssUploadInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
