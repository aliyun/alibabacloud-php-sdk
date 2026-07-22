<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationStandardResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationStandardResponseBody\data\editInfo\goodsRects;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationStandardResponseBody\data\editInfo\textAreas;

class editInfo extends Model
{
    /**
     * @var string[]
     */
    public $font;

    /**
     * @var goodsRects
     */
    public $goodsRects;

    /**
     * @var string
     */
    public $goodsUrl;

    /**
     * @var string[]
     */
    public $languages;

    /**
     * @var string
     */
    public $pictUrl;

    /**
     * @var string
     */
    public $repairedUrl;

    /**
     * @var string[]
     */
    public $repairedUrls;

    /**
     * @var string[]
     */
    public $resultImageIds;

    /**
     * @var string[]
     */
    public $resultUrls;

    /**
     * @var textAreas[]
     */
    public $textAreas;
    protected $_name = [
        'font' => 'Font',
        'goodsRects' => 'GoodsRects',
        'goodsUrl' => 'GoodsUrl',
        'languages' => 'Languages',
        'pictUrl' => 'PictUrl',
        'repairedUrl' => 'RepairedUrl',
        'repairedUrls' => 'RepairedUrls',
        'resultImageIds' => 'ResultImageIds',
        'resultUrls' => 'ResultUrls',
        'textAreas' => 'TextAreas',
    ];

    public function validate()
    {
        if (\is_array($this->font)) {
            Model::validateArray($this->font);
        }
        if (null !== $this->goodsRects) {
            $this->goodsRects->validate();
        }
        if (\is_array($this->languages)) {
            Model::validateArray($this->languages);
        }
        if (\is_array($this->repairedUrls)) {
            Model::validateArray($this->repairedUrls);
        }
        if (\is_array($this->resultImageIds)) {
            Model::validateArray($this->resultImageIds);
        }
        if (\is_array($this->resultUrls)) {
            Model::validateArray($this->resultUrls);
        }
        if (\is_array($this->textAreas)) {
            Model::validateArray($this->textAreas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->font) {
            if (\is_array($this->font)) {
                $res['Font'] = [];
                $n1 = 0;
                foreach ($this->font as $item1) {
                    $res['Font'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->goodsRects) {
            $res['GoodsRects'] = null !== $this->goodsRects ? $this->goodsRects->toArray($noStream) : $this->goodsRects;
        }

        if (null !== $this->goodsUrl) {
            $res['GoodsUrl'] = $this->goodsUrl;
        }

        if (null !== $this->languages) {
            if (\is_array($this->languages)) {
                $res['Languages'] = [];
                $n1 = 0;
                foreach ($this->languages as $item1) {
                    $res['Languages'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pictUrl) {
            $res['PictUrl'] = $this->pictUrl;
        }

        if (null !== $this->repairedUrl) {
            $res['RepairedUrl'] = $this->repairedUrl;
        }

        if (null !== $this->repairedUrls) {
            if (\is_array($this->repairedUrls)) {
                $res['RepairedUrls'] = [];
                $n1 = 0;
                foreach ($this->repairedUrls as $item1) {
                    $res['RepairedUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resultImageIds) {
            if (\is_array($this->resultImageIds)) {
                $res['ResultImageIds'] = [];
                $n1 = 0;
                foreach ($this->resultImageIds as $item1) {
                    $res['ResultImageIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resultUrls) {
            if (\is_array($this->resultUrls)) {
                $res['ResultUrls'] = [];
                $n1 = 0;
                foreach ($this->resultUrls as $item1) {
                    $res['ResultUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->textAreas) {
            if (\is_array($this->textAreas)) {
                $res['TextAreas'] = [];
                $n1 = 0;
                foreach ($this->textAreas as $item1) {
                    $res['TextAreas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Font'])) {
            if (!empty($map['Font'])) {
                $model->font = [];
                $n1 = 0;
                foreach ($map['Font'] as $item1) {
                    $model->font[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GoodsRects'])) {
            $model->goodsRects = goodsRects::fromMap($map['GoodsRects']);
        }

        if (isset($map['GoodsUrl'])) {
            $model->goodsUrl = $map['GoodsUrl'];
        }

        if (isset($map['Languages'])) {
            if (!empty($map['Languages'])) {
                $model->languages = [];
                $n1 = 0;
                foreach ($map['Languages'] as $item1) {
                    $model->languages[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PictUrl'])) {
            $model->pictUrl = $map['PictUrl'];
        }

        if (isset($map['RepairedUrl'])) {
            $model->repairedUrl = $map['RepairedUrl'];
        }

        if (isset($map['RepairedUrls'])) {
            if (!empty($map['RepairedUrls'])) {
                $model->repairedUrls = [];
                $n1 = 0;
                foreach ($map['RepairedUrls'] as $item1) {
                    $model->repairedUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResultImageIds'])) {
            if (!empty($map['ResultImageIds'])) {
                $model->resultImageIds = [];
                $n1 = 0;
                foreach ($map['ResultImageIds'] as $item1) {
                    $model->resultImageIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResultUrls'])) {
            if (!empty($map['ResultUrls'])) {
                $model->resultUrls = [];
                $n1 = 0;
                foreach ($map['ResultUrls'] as $item1) {
                    $model->resultUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TextAreas'])) {
            if (!empty($map['TextAreas'])) {
                $model->textAreas = [];
                $n1 = 0;
                foreach ($map['TextAreas'] as $item1) {
                    $model->textAreas[$n1] = textAreas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
