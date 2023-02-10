<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByPicResponseBody\data;

use AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByPicResponseBody\data\picList\otherBoxes;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByPicResponseBody\data\picList\similarBoxes;
use AlibabaCloud\Tea\Model;

class picList extends Model
{
    /**
     * @example abcdef
     *
     * @var string
     */
    public $customContent;

    /**
     * @example 1860
     *
     * @var int
     */
    public $intAttr;

    /**
     * @var otherBoxes[]
     */
    public $otherBoxes;

    /**
     * @example JY03546
     *
     * @var string
     */
    public $picName;

    /**
     * @example 124624
     *
     * @var string
     */
    public $productId;

    /**
     * @example 0.9
     *
     * @var float
     */
    public $score;

    /**
     * @var similarBoxes[]
     */
    public $similarBoxes;

    /**
     * @example abcdef
     *
     * @var string
     */
    public $strAttr;
    protected $_name = [
        'customContent' => 'CustomContent',
        'intAttr'       => 'IntAttr',
        'otherBoxes'    => 'OtherBoxes',
        'picName'       => 'PicName',
        'productId'     => 'ProductId',
        'score'         => 'Score',
        'similarBoxes'  => 'SimilarBoxes',
        'strAttr'       => 'StrAttr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }
        if (null !== $this->intAttr) {
            $res['IntAttr'] = $this->intAttr;
        }
        if (null !== $this->otherBoxes) {
            $res['OtherBoxes'] = [];
            if (null !== $this->otherBoxes && \is_array($this->otherBoxes)) {
                $n = 0;
                foreach ($this->otherBoxes as $item) {
                    $res['OtherBoxes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->similarBoxes) {
            $res['SimilarBoxes'] = [];
            if (null !== $this->similarBoxes && \is_array($this->similarBoxes)) {
                $n = 0;
                foreach ($this->similarBoxes as $item) {
                    $res['SimilarBoxes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->strAttr) {
            $res['StrAttr'] = $this->strAttr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return picList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }
        if (isset($map['IntAttr'])) {
            $model->intAttr = $map['IntAttr'];
        }
        if (isset($map['OtherBoxes'])) {
            if (!empty($map['OtherBoxes'])) {
                $model->otherBoxes = [];
                $n                 = 0;
                foreach ($map['OtherBoxes'] as $item) {
                    $model->otherBoxes[$n++] = null !== $item ? otherBoxes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SimilarBoxes'])) {
            if (!empty($map['SimilarBoxes'])) {
                $model->similarBoxes = [];
                $n                   = 0;
                foreach ($map['SimilarBoxes'] as $item) {
                    $model->similarBoxes[$n++] = null !== $item ? similarBoxes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StrAttr'])) {
            $model->strAttr = $map['StrAttr'];
        }

        return $model;
    }
}
