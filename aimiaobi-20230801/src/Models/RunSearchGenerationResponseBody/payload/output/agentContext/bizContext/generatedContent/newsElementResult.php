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

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult\newsElementArticleList;
use AlibabaCloud\Tea\Model;

class newsElementResult extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $generateFinished;

    /**
     * @var newsElementArticleList[]
     */
    public $newsElementArticleList;

    /**
     * @example x
     *
     * @var string
     */
    public $textGenerate;
    protected $_name = [
        'generateFinished' => 'GenerateFinished',
        'newsElementArticleList' => 'NewsElementArticleList',
        'textGenerate' => 'TextGenerate',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateFinished) {
            $res['GenerateFinished'] = $this->generateFinished;
        }
        if (null !== $this->newsElementArticleList) {
            $res['NewsElementArticleList'] = [];
            if (null !== $this->newsElementArticleList && \is_array($this->newsElementArticleList)) {
                $n = 0;
                foreach ($this->newsElementArticleList as $item) {
                    $res['NewsElementArticleList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return newsElementResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GenerateFinished'])) {
            $model->generateFinished = $map['GenerateFinished'];
        }
        if (isset($map['NewsElementArticleList'])) {
            if (!empty($map['NewsElementArticleList'])) {
                $model->newsElementArticleList = [];
                $n = 0;
                foreach ($map['NewsElementArticleList'] as $item) {
                    $model->newsElementArticleList[$n++] = null !== $item ? newsElementArticleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TextGenerate'])) {
            $model->textGenerate = $map['TextGenerate'];
        }

        return $model;
    }
}
