<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ProductHotspotDetectionRequest extends Model
{
    /**
     * @var string[]
     */
    public $referenceImageUrls;

    /**
     * @var string
     */
    public $reqId;

    /**
     * @var string
     */
    public $targetImageUrl;
    protected $_name = [
        'referenceImageUrls' => 'ReferenceImageUrls',
        'reqId' => 'ReqId',
        'targetImageUrl' => 'TargetImageUrl',
    ];

    public function validate()
    {
        if (\is_array($this->referenceImageUrls)) {
            Model::validateArray($this->referenceImageUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->referenceImageUrls) {
            if (\is_array($this->referenceImageUrls)) {
                $res['ReferenceImageUrls'] = [];
                $n1 = 0;
                foreach ($this->referenceImageUrls as $item1) {
                    $res['ReferenceImageUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ReferenceImageUrls'])) {
                $model->referenceImageUrls = [];
                $n1 = 0;
                foreach ($map['ReferenceImageUrls'] as $item1) {
                    $model->referenceImageUrls[$n1] = $item1;
                    ++$n1;
                }
            }
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
