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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocBrainmapResponseBody\payload;

use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @example 65
     *
     * @var int
     */
    public $inputTokens;

    /**
     * @example 100
     *
     * @var int
     */
    public $outputTokens;

    /**
     * @example 165
     *
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'inputTokens' => 'InputTokens',
        'outputTokens' => 'OutputTokens',
        'totalTokens' => 'TotalTokens',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputTokens) {
            $res['InputTokens'] = $this->inputTokens;
        }
        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }
        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputTokens'])) {
            $model->inputTokens = $map['InputTokens'];
        }
        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }
        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        return $model;
    }
}
