<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\EcomVideoRecreationRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\EcomVideoRecreationRequest\input\productInfo;

class input extends Model
{
    /**
     * @var string
     */
    public $changeDescription;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string[]
     */
    public $personReferenceImageUrls;

    /**
     * @var string[]
     */
    public $productImageUrls;

    /**
     * @var productInfo
     */
    public $productInfo;

    /**
     * @var string
     */
    public $sourceVideoUrl;
    protected $_name = [
        'changeDescription' => 'ChangeDescription',
        'mode' => 'Mode',
        'personReferenceImageUrls' => 'PersonReferenceImageUrls',
        'productImageUrls' => 'ProductImageUrls',
        'productInfo' => 'ProductInfo',
        'sourceVideoUrl' => 'SourceVideoUrl',
    ];

    public function validate()
    {
        if (\is_array($this->personReferenceImageUrls)) {
            Model::validateArray($this->personReferenceImageUrls);
        }
        if (\is_array($this->productImageUrls)) {
            Model::validateArray($this->productImageUrls);
        }
        if (null !== $this->productInfo) {
            $this->productInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeDescription) {
            $res['ChangeDescription'] = $this->changeDescription;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->personReferenceImageUrls) {
            if (\is_array($this->personReferenceImageUrls)) {
                $res['PersonReferenceImageUrls'] = [];
                $n1 = 0;
                foreach ($this->personReferenceImageUrls as $item1) {
                    $res['PersonReferenceImageUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->productImageUrls) {
            if (\is_array($this->productImageUrls)) {
                $res['ProductImageUrls'] = [];
                $n1 = 0;
                foreach ($this->productImageUrls as $item1) {
                    $res['ProductImageUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->productInfo) {
            $res['ProductInfo'] = null !== $this->productInfo ? $this->productInfo->toArray($noStream) : $this->productInfo;
        }

        if (null !== $this->sourceVideoUrl) {
            $res['SourceVideoUrl'] = $this->sourceVideoUrl;
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
        if (isset($map['ChangeDescription'])) {
            $model->changeDescription = $map['ChangeDescription'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['PersonReferenceImageUrls'])) {
            if (!empty($map['PersonReferenceImageUrls'])) {
                $model->personReferenceImageUrls = [];
                $n1 = 0;
                foreach ($map['PersonReferenceImageUrls'] as $item1) {
                    $model->personReferenceImageUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProductImageUrls'])) {
            if (!empty($map['ProductImageUrls'])) {
                $model->productImageUrls = [];
                $n1 = 0;
                foreach ($map['ProductImageUrls'] as $item1) {
                    $model->productImageUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProductInfo'])) {
            $model->productInfo = productInfo::fromMap($map['ProductInfo']);
        }

        if (isset($map['SourceVideoUrl'])) {
            $model->sourceVideoUrl = $map['SourceVideoUrl'];
        }

        return $model;
    }
}
