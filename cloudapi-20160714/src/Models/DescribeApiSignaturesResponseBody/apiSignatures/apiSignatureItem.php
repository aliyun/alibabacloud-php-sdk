<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesResponseBody\apiSignatures;

use AlibabaCloud\Tea\Model;

class apiSignatureItem extends Model
{
    /**
     * @var string
     */
    public $boundTime;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $signatureId;

    /**
     * @var string
     */
    public $signatureName;

    /**
     * @var string
     */
    public $apiName;
    protected $_name = [
        'boundTime'     => 'BoundTime',
        'apiId'         => 'ApiId',
        'signatureId'   => 'SignatureId',
        'signatureName' => 'SignatureName',
        'apiName'       => 'ApiName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->signatureName) {
            $res['SignatureName'] = $this->signatureName;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiSignatureItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['SignatureName'])) {
            $model->signatureName = $map['SignatureName'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        return $model;
    }
}
