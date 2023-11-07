<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class GetOperationOssUploadPolicyResponseBody extends Model
{
    /**
     * @example hObpgEXoca42****
     *
     * @var string
     */
    public $accessid;

    /**
     * @example eyJleHBpcmF0aW9uIjoiMjAaMC0wNy0wMlQxKToyMDoxMS44ODRaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDBdLFsic3RhcnRzLXdpdGgiLCIka2V5IiwiMTIxOTU0MTE2MTIxMzA1Ny9PRkZMSU5FX1RSQU5TRkVSLzE1OTM2ODg1MTE4ODMi****
     *
     * @var string
     */
    public $encodedPolicy;

    /**
     * @example 1593688811881
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 1219541161213157/OFFLINE_TRANSFER/159368851****
     *
     * @var string
     */
    public $fileDir;

    /**
     * @description OSS Endpoint。
     *
     * @example //***-basic-cert.oss-cn-***.aliyuncs.com/
     *
     * @var string
     */
    public $host;

    /**
     * @example 9DFCF6F8-243C-40EC-8035-4B12FEFD7D011
     *
     * @var string
     */
    public $requestId;

    /**
     * @example pNVECGkyL0tl4bKXekV5ErZ****
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessid'      => 'Accessid',
        'encodedPolicy' => 'EncodedPolicy',
        'expireTime'    => 'ExpireTime',
        'fileDir'       => 'FileDir',
        'host'          => 'Host',
        'requestId'     => 'RequestId',
        'signature'     => 'Signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessid) {
            $res['Accessid'] = $this->accessid;
        }
        if (null !== $this->encodedPolicy) {
            $res['EncodedPolicy'] = $this->encodedPolicy;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->fileDir) {
            $res['FileDir'] = $this->fileDir;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOperationOssUploadPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessid'])) {
            $model->accessid = $map['Accessid'];
        }
        if (isset($map['EncodedPolicy'])) {
            $model->encodedPolicy = $map['EncodedPolicy'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['FileDir'])) {
            $model->fileDir = $map['FileDir'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
