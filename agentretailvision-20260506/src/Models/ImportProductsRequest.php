<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\ImportProductsRequest\multiViewImages;

class ImportProductsRequest extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string[]
     */
    public $extraImages;

    /**
     * @var string
     */
    public $imageTitle;

    /**
     * @var string
     */
    public $itemUniqueId;

    /**
     * @var string[]
     */
    public $mainImage;

    /**
     * @var multiViewImages[]
     */
    public $multiViewImages;
    protected $_name = [
        'deviceId' => 'DeviceId',
        'extraImages' => 'ExtraImages',
        'imageTitle' => 'ImageTitle',
        'itemUniqueId' => 'ItemUniqueId',
        'mainImage' => 'MainImage',
        'multiViewImages' => 'MultiViewImages',
    ];

    public function validate()
    {
        if (\is_array($this->extraImages)) {
            Model::validateArray($this->extraImages);
        }
        if (\is_array($this->mainImage)) {
            Model::validateArray($this->mainImage);
        }
        if (\is_array($this->multiViewImages)) {
            Model::validateArray($this->multiViewImages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->extraImages) {
            if (\is_array($this->extraImages)) {
                $res['ExtraImages'] = [];
                $n1 = 0;
                foreach ($this->extraImages as $item1) {
                    $res['ExtraImages'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageTitle) {
            $res['ImageTitle'] = $this->imageTitle;
        }

        if (null !== $this->itemUniqueId) {
            $res['ItemUniqueId'] = $this->itemUniqueId;
        }

        if (null !== $this->mainImage) {
            if (\is_array($this->mainImage)) {
                $res['MainImage'] = [];
                $n1 = 0;
                foreach ($this->mainImage as $item1) {
                    $res['MainImage'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->multiViewImages) {
            if (\is_array($this->multiViewImages)) {
                $res['MultiViewImages'] = [];
                $n1 = 0;
                foreach ($this->multiViewImages as $item1) {
                    $res['MultiViewImages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['ExtraImages'])) {
            if (!empty($map['ExtraImages'])) {
                $model->extraImages = [];
                $n1 = 0;
                foreach ($map['ExtraImages'] as $item1) {
                    $model->extraImages[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageTitle'])) {
            $model->imageTitle = $map['ImageTitle'];
        }

        if (isset($map['ItemUniqueId'])) {
            $model->itemUniqueId = $map['ItemUniqueId'];
        }

        if (isset($map['MainImage'])) {
            if (!empty($map['MainImage'])) {
                $model->mainImage = [];
                $n1 = 0;
                foreach ($map['MainImage'] as $item1) {
                    $model->mainImage[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MultiViewImages'])) {
            if (!empty($map['MultiViewImages'])) {
                $model->multiViewImages = [];
                $n1 = 0;
                foreach ($map['MultiViewImages'] as $item1) {
                    $model->multiViewImages[$n1] = multiViewImages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
