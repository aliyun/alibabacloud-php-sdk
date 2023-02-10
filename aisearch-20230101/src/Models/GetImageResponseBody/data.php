<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models\GetImageResponseBody;

use AlibabaCloud\SDK\Aisearch\V20230101\Models\GetImageResponseBody\data\boxes;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var boxes[]
     */
    public $boxes;

    /**
     * @example zidingyi
     *
     * @var string
     */
    public $customContent;

    /**
     * @example 123
     *
     * @var int
     */
    public $intAttr;

    /**
     * @example 2092061_1.jpg
     *
     * @var string
     */
    public $picName;

    /**
     * @example P0001
     *
     * @var string
     */
    public $productId;

    /**
     * @example abc
     *
     * @var string
     */
    public $strAttr;
    protected $_name = [
        'boxes'         => 'Boxes',
        'customContent' => 'CustomContent',
        'intAttr'       => 'IntAttr',
        'picName'       => 'PicName',
        'productId'     => 'ProductId',
        'strAttr'       => 'StrAttr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = [];
            if (null !== $this->boxes && \is_array($this->boxes)) {
                $n = 0;
                foreach ($this->boxes as $item) {
                    $res['Boxes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }
        if (null !== $this->intAttr) {
            $res['IntAttr'] = $this->intAttr;
        }
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->strAttr) {
            $res['StrAttr'] = $this->strAttr;
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
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = [];
                $n            = 0;
                foreach ($map['Boxes'] as $item) {
                    $model->boxes[$n++] = null !== $item ? boxes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }
        if (isset($map['IntAttr'])) {
            $model->intAttr = $map['IntAttr'];
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['StrAttr'])) {
            $model->strAttr = $map['StrAttr'];
        }

        return $model;
    }
}
