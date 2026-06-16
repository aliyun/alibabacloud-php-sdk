<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProResponseBody\data\genFiles;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProResponseBody\data\genFiles\editInfo\goodsRects;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProResponseBody\data\genFiles\editInfo\textAreas;

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
     * @var string[]
     */
    public $languages;

    /**
     * @var string
     */
    public $repairedUrl;

    /**
     * @var string[]
     */
    public $resultImageIds;

    /**
     * @var textAreas[]
     */
    public $textAreas;
    protected $_name = [
        'font' => 'Font',
        'goodsRects' => 'GoodsRects',
        'languages' => 'Languages',
        'repairedUrl' => 'RepairedUrl',
        'resultImageIds' => 'ResultImageIds',
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
        if (\is_array($this->resultImageIds)) {
            Model::validateArray($this->resultImageIds);
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

        if (null !== $this->repairedUrl) {
            $res['RepairedUrl'] = $this->repairedUrl;
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

        if (isset($map['RepairedUrl'])) {
            $model->repairedUrl = $map['RepairedUrl'];
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
