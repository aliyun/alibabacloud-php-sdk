<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetLabelAnalysisResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetLabelAnalysisResultResponseBody\data\tagList;

class data extends Model
{
    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var tagList[]
     */
    public $tagList;

    /**
     * @var int
     */
    public $totalTokens;

    /**
     * @var int
     */
    public $tyxmPlusCount;

    /**
     * @var int
     */
    public $tyxmTurboCount;
    protected $_name = [
        'inputTokens' => 'InputTokens',
        'outputTokens' => 'OutputTokens',
        'tagList' => 'TagList',
        'totalTokens' => 'TotalTokens',
        'tyxmPlusCount' => 'TyxmPlusCount',
        'tyxmTurboCount' => 'TyxmTurboCount',
    ];

    public function validate()
    {
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputTokens) {
            $res['InputTokens'] = $this->inputTokens;
        }

        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }

        if (null !== $this->tagList) {
            if (\is_array($this->tagList)) {
                $res['TagList'] = [];
                $n1 = 0;
                foreach ($this->tagList as $item1) {
                    $res['TagList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
        }

        if (null !== $this->tyxmPlusCount) {
            $res['TyxmPlusCount'] = $this->tyxmPlusCount;
        }

        if (null !== $this->tyxmTurboCount) {
            $res['TyxmTurboCount'] = $this->tyxmTurboCount;
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
        if (isset($map['InputTokens'])) {
            $model->inputTokens = $map['InputTokens'];
        }

        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }

        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n1 = 0;
                foreach ($map['TagList'] as $item1) {
                    $model->tagList[$n1] = tagList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        if (isset($map['TyxmPlusCount'])) {
            $model->tyxmPlusCount = $map['TyxmPlusCount'];
        }

        if (isset($map['TyxmTurboCount'])) {
            $model->tyxmTurboCount = $map['TyxmTurboCount'];
        }

        return $model;
    }
}
