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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\intelligentSearchConfig;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\intelligentSearchConfig\searchSamples\articles;
use AlibabaCloud\Tea\Model;

class searchSamples extends Model
{
    /**
     * @var articles[]
     */
    public $articles;

    /**
     * @example xx
     *
     * @var string
     */
    public $prompt;

    /**
     * @example xxx
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'articles' => 'Articles',
        'prompt' => 'Prompt',
        'text' => 'Text',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->articles) {
            $res['Articles'] = [];
            if (null !== $this->articles && \is_array($this->articles)) {
                $n = 0;
                foreach ($this->articles as $item) {
                    $res['Articles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchSamples
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Articles'])) {
            if (!empty($map['Articles'])) {
                $model->articles = [];
                $n = 0;
                foreach ($map['Articles'] as $item) {
                    $model->articles[$n++] = null !== $item ? articles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
