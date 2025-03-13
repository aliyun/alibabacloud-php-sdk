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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetTagMiningAnalysisTaskResponseBody\data\results\payload;

use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $inputToken;

    /**
     * @example 200
     *
     * @var int
     */
    public $outputToken;

    /**
     * @example 300
     *
     * @var int
     */
    public $totalToken;
    protected $_name = [
        'inputToken' => 'inputToken',
        'outputToken' => 'outputToken',
        'totalToken' => 'totalToken',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputToken) {
            $res['inputToken'] = $this->inputToken;
        }
        if (null !== $this->outputToken) {
            $res['outputToken'] = $this->outputToken;
        }
        if (null !== $this->totalToken) {
            $res['totalToken'] = $this->totalToken;
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
        if (isset($map['inputToken'])) {
            $model->inputToken = $map['inputToken'];
        }
        if (isset($map['outputToken'])) {
            $model->outputToken = $map['outputToken'];
        }
        if (isset($map['totalToken'])) {
            $model->totalToken = $map['totalToken'];
        }

        return $model;
    }
}
