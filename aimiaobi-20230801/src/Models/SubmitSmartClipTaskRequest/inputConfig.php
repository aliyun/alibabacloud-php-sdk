<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\inputConfig\backgroundMusics;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\inputConfig\stickers;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\inputConfig\videoIds;
use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
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

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundMusics) {
            $res['BackgroundMusics'] = [];
            if (null !== $this->backgroundMusics && \is_array($this->backgroundMusics)) {
                $n = 0;
                foreach ($this->backgroundMusics as $item) {
                    $res['BackgroundMusics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->speechTexts) {
            $res['SpeechTexts'] = $this->speechTexts;
        }
        if (null !== $this->stickers) {
            $res['Stickers'] = [];
            if (null !== $this->stickers && \is_array($this->stickers)) {
                $n = 0;
                foreach ($this->stickers as $item) {
                    $res['Stickers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->titles) {
            $res['Titles'] = $this->titles;
        }
        if (null !== $this->videoIds) {
            $res['VideoIds'] = [];
            if (null !== $this->videoIds && \is_array($this->videoIds)) {
                $n = 0;
                foreach ($this->videoIds as $item) {
                    $res['VideoIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackgroundMusics'])) {
            if (!empty($map['BackgroundMusics'])) {
                $model->backgroundMusics = [];
                $n = 0;
                foreach ($map['BackgroundMusics'] as $item) {
                    $model->backgroundMusics[$n++] = null !== $item ? backgroundMusics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SpeechTexts'])) {
            if (!empty($map['SpeechTexts'])) {
                $model->speechTexts = $map['SpeechTexts'];
            }
        }
        if (isset($map['Stickers'])) {
            if (!empty($map['Stickers'])) {
                $model->stickers = [];
                $n = 0;
                foreach ($map['Stickers'] as $item) {
                    $model->stickers[$n++] = null !== $item ? stickers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Titles'])) {
            if (!empty($map['Titles'])) {
                $model->titles = $map['Titles'];
            }
        }
        if (isset($map['VideoIds'])) {
            if (!empty($map['VideoIds'])) {
                $model->videoIds = [];
                $n = 0;
                foreach ($map['VideoIds'] as $item) {
                    $model->videoIds[$n++] = null !== $item ? videoIds::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
