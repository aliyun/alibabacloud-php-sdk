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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult\searchResult;
use AlibabaCloud\Tea\Model;

class excerptResult extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $generateFinished;

    /**
     * @example concise
     *
     * @var string
     */
    public $generateLevel;

    /**
     * @var searchResult[]
     */
    public $searchResult;

    /**
     * @example xx
     *
     * @var string
     */
    public $textGenerate;
    protected $_name = [
        'generateFinished' => 'GenerateFinished',
        'generateLevel' => 'GenerateLevel',
        'searchResult' => 'SearchResult',
        'textGenerate' => 'TextGenerate',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateFinished) {
            $res['GenerateFinished'] = $this->generateFinished;
        }
        if (null !== $this->generateLevel) {
            $res['GenerateLevel'] = $this->generateLevel;
        }
        if (null !== $this->searchResult) {
            $res['SearchResult'] = [];
            if (null !== $this->searchResult && \is_array($this->searchResult)) {
                $n = 0;
                foreach ($this->searchResult as $item) {
                    $res['SearchResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->textGenerate) {
            $res['TextGenerate'] = $this->textGenerate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return excerptResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GenerateFinished'])) {
            $model->generateFinished = $map['GenerateFinished'];
        }
        if (isset($map['GenerateLevel'])) {
            $model->generateLevel = $map['GenerateLevel'];
        }
        if (isset($map['SearchResult'])) {
            if (!empty($map['SearchResult'])) {
                $model->searchResult = [];
                $n = 0;
                foreach ($map['SearchResult'] as $item) {
                    $model->searchResult[$n++] = null !== $item ? searchResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TextGenerate'])) {
            $model->textGenerate = $map['TextGenerate'];
        }

        return $model;
    }
}
