<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesResponseBody\apiSignatures;

use AlibabaCloud\Dara\Model;

class apiSignatureItem extends Model
{
    /**
     * @var string
     */
    public $apiId;
    /**
     * @var string
     */
    public $apiName;
    /**
     * @var string
     */
    public $boundTime;
    /**
     * @var string
     */
    public $signatureId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
