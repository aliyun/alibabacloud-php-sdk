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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output\hotTopicSummaries\images;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output\hotTopicSummaries\news;
use AlibabaCloud\Tea\Model;

class hotTopicSummaries extends Model
{
    /**
     * @example 100000
     *
     * @var float
     */
    public $customHotValue;

    /**
     * @example xxx
     *
     * @var string
     */
    public $customTextSummary;

    /**
     * @example xx
     *
     * @var string
     */
    public $hotTopic;

    /**
     * @example 2024-09-13_08
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @example 100000
     *
     * @var float
     */
    public $hotValue;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @var news[]
     */
    public $news;

    /**
     * @example xxx
     *
     * @var string
     */
    public $textSummary;
    protected $_name = [
        'customHotValue' => 'customHotValue',
        'customTextSummary' => 'customTextSummary',
        'hotTopic' => 'hotTopic',
        'hotTopicVersion' => 'hotTopicVersion',
        'hotValue' => 'hotValue',
        'images' => 'images',
        'news' => 'news',
        'textSummary' => 'textSummary',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customHotValue) {
            $res['customHotValue'] = $this->customHotValue;
        }
        if (null !== $this->customTextSummary) {
            $res['customTextSummary'] = $this->customTextSummary;
        }
        if (null !== $this->hotTopic) {
            $res['hotTopic'] = $this->hotTopic;
        }
        if (null !== $this->hotTopicVersion) {
            $res['hotTopicVersion'] = $this->hotTopicVersion;
        }
        if (null !== $this->hotValue) {
            $res['hotValue'] = $this->hotValue;
        }
        if (null !== $this->images) {
            $res['images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->news) {
            $res['news'] = [];
            if (null !== $this->news && \is_array($this->news)) {
                $n = 0;
                foreach ($this->news as $item) {
                    $res['news'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->textSummary) {
            $res['textSummary'] = $this->textSummary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotTopicSummaries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['customHotValue'])) {
            $model->customHotValue = $map['customHotValue'];
        }
        if (isset($map['customTextSummary'])) {
            $model->customTextSummary = $map['customTextSummary'];
        }
        if (isset($map['hotTopic'])) {
            $model->hotTopic = $map['hotTopic'];
        }
        if (isset($map['hotTopicVersion'])) {
            $model->hotTopicVersion = $map['hotTopicVersion'];
        }
        if (isset($map['hotValue'])) {
            $model->hotValue = $map['hotValue'];
        }
        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n = 0;
                foreach ($map['images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['news'])) {
            if (!empty($map['news'])) {
                $model->news = [];
                $n = 0;
                foreach ($map['news'] as $item) {
                    $model->news[$n++] = null !== $item ? news::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['textSummary'])) {
            $model->textSummary = $map['textSummary'];
        }

        return $model;
    }
}
