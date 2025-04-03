<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\inputConfig\backgroundMusics;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\inputConfig\stickers;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\inputConfig\videoIds;

class inputConfig extends Model
{
    /**
     * @var backgroundMusics[]
     */
    public $backgroundMusics;

    /**
     * @var string[]
     */
    public $speechTexts;

    /**
     * @var stickers[]
     */
    public $stickers;

    /**
     * @var string[]
     */
    public $titles;

    /**
     * @var videoIds[]
     */
    public $videoIds;
    protected $_name = [
        'backgroundMusics' => 'BackgroundMusics',
        'speechTexts' => 'SpeechTexts',
        'stickers' => 'Stickers',
        'titles' => 'Titles',
        'videoIds' => 'VideoIds',
    ];

    public function validate()
    {
        if (\is_array($this->backgroundMusics)) {
            Model::validateArray($this->backgroundMusics);
        }
        if (\is_array($this->speechTexts)) {
            Model::validateArray($this->speechTexts);
        }
        if (\is_array($this->stickers)) {
            Model::validateArray($this->stickers);
        }
        if (\is_array($this->titles)) {
            Model::validateArray($this->titles);
        }
        if (\is_array($this->videoIds)) {
            Model::validateArray($this->videoIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundMusics) {
            if (\is_array($this->backgroundMusics)) {
                $res['BackgroundMusics'] = [];
                $n1 = 0;
                foreach ($this->backgroundMusics as $item1) {
                    $res['BackgroundMusics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->speechTexts) {
            if (\is_array($this->speechTexts)) {
                $res['SpeechTexts'] = [];
                $n1 = 0;
                foreach ($this->speechTexts as $item1) {
                    $res['SpeechTexts'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->stickers) {
            if (\is_array($this->stickers)) {
                $res['Stickers'] = [];
                $n1 = 0;
                foreach ($this->stickers as $item1) {
                    $res['Stickers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->titles) {
            if (\is_array($this->titles)) {
                $res['Titles'] = [];
                $n1 = 0;
                foreach ($this->titles as $item1) {
                    $res['Titles'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->videoIds) {
            if (\is_array($this->videoIds)) {
                $res['VideoIds'] = [];
                $n1 = 0;
                foreach ($this->videoIds as $item1) {
                    $res['VideoIds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BackgroundMusics'])) {
            if (!empty($map['BackgroundMusics'])) {
                $model->backgroundMusics = [];
                $n1 = 0;
                foreach ($map['BackgroundMusics'] as $item1) {
                    $model->backgroundMusics[$n1++] = backgroundMusics::fromMap($item1);
                }
            }
        }

        if (isset($map['SpeechTexts'])) {
            if (!empty($map['SpeechTexts'])) {
                $model->speechTexts = [];
                $n1 = 0;
                foreach ($map['SpeechTexts'] as $item1) {
                    $model->speechTexts[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Stickers'])) {
            if (!empty($map['Stickers'])) {
                $model->stickers = [];
                $n1 = 0;
                foreach ($map['Stickers'] as $item1) {
                    $model->stickers[$n1++] = stickers::fromMap($item1);
                }
            }
        }

        if (isset($map['Titles'])) {
            if (!empty($map['Titles'])) {
                $model->titles = [];
                $n1 = 0;
                foreach ($map['Titles'] as $item1) {
                    $model->titles[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VideoIds'])) {
            if (!empty($map['VideoIds'])) {
                $model->videoIds = [];
                $n1 = 0;
                foreach ($map['VideoIds'] as $item1) {
                    $model->videoIds[$n1++] = videoIds::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
