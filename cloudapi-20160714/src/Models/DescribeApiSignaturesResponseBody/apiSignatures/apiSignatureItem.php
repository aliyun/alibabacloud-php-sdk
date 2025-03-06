<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesResponseBody\apiSignatures;

use AlibabaCloud\Tea\Model;

class apiSignatureItem extends Model
{
    /**
     * @description The ID of the API.
     *
     * @example 46fbb52840d146f186e38e8e70fc8c90
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The name of the API.
     *
     * @example testapi
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The time when the backend signature key was bound.
     *
     * @example 2016-07-23T08:28:48Z
     *
     * @var string
     */
    public $boundTime;

    /**
     * @description The ID of the backend signature key.
     *
     * @example dd05f1c54d6749eda95f9fa6d491449a
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description The name of the backend signature key.
     *
     * @example backendsignature
     *
     * @var string
     */
    public $signatureName;
    protected $_name = [
        'apiId'         => 'ApiId',
        'apiName'       => 'ApiName',
        'boundTime'     => 'BoundTime',
        'signatureId'   => 'SignatureId',
        'signatureName' => 'SignatureName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->signatureName) {
            $res['SignatureName'] = $this->signatureName;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['SignatureName'])) {
            $model->signatureName = $map['SignatureName'];
        }

        return $model;
    }
}
