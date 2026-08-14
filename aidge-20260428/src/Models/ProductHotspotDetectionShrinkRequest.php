<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ProductHotspotDetectionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $referenceImageUrlsShrink;

    /**
     * @var string
     */
    public $reqId;

    /**
     * @var string
     */
    public $targetImageUrl;
    protected $_name = [
        'referenceImageUrlsShrink' => 'ReferenceImageUrls',
        'reqId' => 'ReqId',
        'targetImageUrl' => 'TargetImageUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->referenceImageUrlsShrink) {
            $res['ReferenceImageUrls'] = $this->referenceImageUrlsShrink;
        }

        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }

        if (null !== $this->targetImageUrl) {
            $res['TargetImageUrl'] = $this->targetImageUrl;
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
        if (isset($map['ReferenceImageUrls'])) {
            $model->referenceImageUrlsShrink = $map['ReferenceImageUrls'];
        }

        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }

        if (isset($map['TargetImageUrl'])) {
            $model->targetImageUrl = $map['TargetImageUrl'];
        }

        return $model;
    }
}
