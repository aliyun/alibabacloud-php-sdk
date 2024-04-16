<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GenerateUploadTokenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $ossAccessKeyId;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $serverURL;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $xAmzAlgorithm;

    /**
     * @var string
     */
    public $xAmzCredential;

    /**
     * @var string
     */
    public $xAmzDate;

    /**
     * @var string
     */
    public $xAmzSignature;
    protected $_name = [
        'key'            => 'Key',
        'ossAccessKeyId' => 'OssAccessKeyId',
        'policy'         => 'Policy',
        'serverURL'      => 'ServerURL',
        'signature'      => 'Signature',
        'xAmzAlgorithm'  => 'X-Amz-Algorithm',
        'xAmzCredential' => 'X-Amz-Credential',
        'xAmzDate'       => 'X-Amz-Date',
        'xAmzSignature'  => 'X-Amz-Signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->ossAccessKeyId) {
            $res['OssAccessKeyId'] = $this->ossAccessKeyId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->serverURL) {
            $res['ServerURL'] = $this->serverURL;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->xAmzAlgorithm) {
            $res['X-Amz-Algorithm'] = $this->xAmzAlgorithm;
        }
        if (null !== $this->xAmzCredential) {
            $res['X-Amz-Credential'] = $this->xAmzCredential;
        }
        if (null !== $this->xAmzDate) {
            $res['X-Amz-Date'] = $this->xAmzDate;
        }
        if (null !== $this->xAmzSignature) {
            $res['X-Amz-Signature'] = $this->xAmzSignature;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['OssAccessKeyId'])) {
            $model->ossAccessKeyId = $map['OssAccessKeyId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['ServerURL'])) {
            $model->serverURL = $map['ServerURL'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['X-Amz-Algorithm'])) {
            $model->xAmzAlgorithm = $map['X-Amz-Algorithm'];
        }
        if (isset($map['X-Amz-Credential'])) {
            $model->xAmzCredential = $map['X-Amz-Credential'];
        }
        if (isset($map['X-Amz-Date'])) {
            $model->xAmzDate = $map['X-Amz-Date'];
        }
        if (isset($map['X-Amz-Signature'])) {
            $model->xAmzSignature = $map['X-Amz-Signature'];
        }

        return $model;
    }
}
