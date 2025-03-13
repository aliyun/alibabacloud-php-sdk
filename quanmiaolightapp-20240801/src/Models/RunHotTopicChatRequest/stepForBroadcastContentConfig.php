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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatRequest;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatRequest\stepForBroadcastContentConfig\customHotValueWeights;
use AlibabaCloud\Tea\Model;

class stepForBroadcastContentConfig extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var customHotValueWeights[]
     */
    public $customHotValueWeights;

    /**
     * @example 20
     *
     * @var int
     */
    public $topicCount;
    protected $_name = [
        'categories' => 'categories',
        'customHotValueWeights' => 'customHotValueWeights',
        'topicCount' => 'topicCount',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['categories'] = $this->categories;
        }
        if (null !== $this->customHotValueWeights) {
            $res['customHotValueWeights'] = [];
            if (null !== $this->customHotValueWeights && \is_array($this->customHotValueWeights)) {
                $n = 0;
                foreach ($this->customHotValueWeights as $item) {
                    $res['customHotValueWeights'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topicCount) {
            $res['topicCount'] = $this->topicCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepForBroadcastContentConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['categories'])) {
            if (!empty($map['categories'])) {
                $model->categories = $map['categories'];
            }
        }
        if (isset($map['customHotValueWeights'])) {
            if (!empty($map['customHotValueWeights'])) {
                $model->customHotValueWeights = [];
                $n = 0;
                foreach ($map['customHotValueWeights'] as $item) {
                    $model->customHotValueWeights[$n++] = null !== $item ? customHotValueWeights::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['topicCount'])) {
            $model->topicCount = $map['topicCount'];
        }

        return $model;
    }
}
