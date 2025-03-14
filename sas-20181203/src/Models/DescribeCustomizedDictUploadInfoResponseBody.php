<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomizedDictUploadInfoResponseBody extends Model
{
    /**
     * @description The AccessKey ID that is required to access the OSS object.
     *
     * @example LTAI4G1mgPbjvG********
     *
     * @var string
     */
    public $accessid;

    /**
     * @description The time when the OSS signature expires. This value is a UNIX timestamp.
     *
     * @example 1719921470
     *
     * @var string
     */
    public $expire;

    /**
     * @description The OSS endpoint.
     *
     * @example https://aegis-update-static-file.oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The key of the OSS object.
     *
     * @example HC_CUSTOMIZED_DICT/176618589410****.tmp
     *
     * @var string
     */
    public $key;

    /**
     * @description The policy of the OSS bucket.
     *
     * @example eyJleHBpcmF0aW9uIjoiMjAyNC0wNy0wMlQxMTo1Nzo1MC44MzJaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNDA5NjBdLFsiZXEiLCIka2V5IiwiSENfQ1VTVE9NSVpFRF9ESUNUXC8xNzY2MTg1ODk0MTA0Njc1LnRtc****
     *
     * @var string
     */
    public $policy;

    /**
     * @description The request ID.
     *
     * @example BDEDEEE7-AC25-559E-8C12-5168B139****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The security token.
     *
     * @example ***
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description The OSS signature.
     *
     * @example mWGRgn0CtdbVf8UuJbTXOmo2****
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessid' => 'Accessid',
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
        if (null !== $this->accessid) {
            $res['Accessid'] = $this->accessid;
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
     * @return DescribeCustomizedDictUploadInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessid'])) {
            $model->accessid = $map['Accessid'];
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
