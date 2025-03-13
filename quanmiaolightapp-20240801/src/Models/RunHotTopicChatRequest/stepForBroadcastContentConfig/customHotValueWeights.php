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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatRequest\stepForBroadcastContentConfig;

use AlibabaCloud\Tea\Model;

class customHotValueWeights extends Model
{
    /**
     * @example comments
     *
     * @var string
     */
    public $dimension;

    /**
     * @example 1
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'dimension' => 'dimension',
        'weight' => 'weight',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimension) {
            $res['dimension'] = $this->dimension;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customHotValueWeights
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dimension'])) {
            $model->dimension = $map['dimension'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
