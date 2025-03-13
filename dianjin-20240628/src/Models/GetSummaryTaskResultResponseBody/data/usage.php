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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetSummaryTaskResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $imageCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $imageTokens;

    /**
     * @example 100
     *
     * @var int
     */
    public $inputTokens;

    /**
     * @example 200
     *
     * @var int
     */
    public $outputTokens;

    /**
     * @example 300
     *
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'imageCount' => 'imageCount',
        'imageTokens' => 'imageTokens',
        'inputTokens' => 'inputTokens',
        'outputTokens' => 'outputTokens',
        'totalTokens' => 'totalTokens',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageCount) {
            $res['imageCount'] = $this->imageCount;
        }
        if (null !== $this->imageTokens) {
            $res['imageTokens'] = $this->imageTokens;
        }
        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }
        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }
        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
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
        if (isset($map['imageCount'])) {
            $model->imageCount = $map['imageCount'];
        }
        if (isset($map['imageTokens'])) {
            $model->imageTokens = $map['imageTokens'];
        }
        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }
        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }
        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        return $model;
    }
}
