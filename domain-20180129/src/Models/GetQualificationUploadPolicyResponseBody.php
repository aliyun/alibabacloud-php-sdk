<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class GetQualificationUploadPolicyResponseBody extends Model
{
    /**
     * @example hObpgEXoca42****
     *
     * @var string
     */
    public $accessid;

    /**
     * @example 20211220/131953297274****_4de3db85-4f98-488d-845b-d75bf035b13d
     *
     * @var string
     */
    public $dir;

    /**
     * @example 1593688811881
     *
     * @var string
     */
    public $expire;

    /**
     * @example https://********-review.oss-cn-********.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @example eyJleHBpcmF0aW9uIjoiMjAaMC0wNy0wMlQxKToyMDoxMS44ODRaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDBdLFsic3RhcnRzLXdpdGgiLCIka2V5IiwiMTIxOTU0MTE2MTIxMzA1Ny9PRkZMSU5FX1RSQU5TRkVSLzE1OTM2ODg1MTE4ODMi****
     *
     * @var string
     */
    public $policy;

    /**
     * @example 20211220/131953297274****_4de3db85-4f98-488d-845b-d75bf035b13d_${filename}
     *
     * @var string
     */
    public $prefix;

    /**
     * @example 9DFCF6F8-243C-****-8035-4B12FEFD7D48
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
        'accessid'  => 'Accessid',
        'dir'       => 'Dir',
        'expire'    => 'Expire',
        'host'      => 'Host',
        'policy'    => 'Policy',
        'prefix'    => 'Prefix',
        'requestId' => 'RequestId',
        'signature' => 'Signature',
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
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
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
     * @return GetQualificationUploadPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessid'])) {
            $model->accessid = $map['Accessid'];
        }
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
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
