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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody\data;

use AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody\data\response\choices;
use AlibabaCloud\Tea\Model;

class response extends Model
{
    /**
     * @var choices[]
     */
    public $choices;

    /**
     * @example 1737448637
     *
     * @var int
     */
    public $created;

    /**
     * @example d91d9afa-7cfc-4235-b012-a6f8e6ffa443
     *
     * @var string
     */
    public $id;

    /**
     * @example qwen-plus
     *
     * @var string
     */
    public $modelId;

    /**
     * @example 2025-01-21T16:37:17.497206762
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'choices' => 'choices',
        'created' => 'created',
        'id' => 'id',
        'modelId' => 'modelId',
        'time' => 'time',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->choices) {
            $res['choices'] = [];
            if (null !== $this->choices && \is_array($this->choices)) {
                $n = 0;
                foreach ($this->choices as $item) {
                    $res['choices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return response
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['choices'])) {
            if (!empty($map['choices'])) {
                $model->choices = [];
                $n = 0;
                foreach ($map['choices'] as $item) {
                    $model->choices[$n++] = null !== $item ? choices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        return $model;
    }
}
