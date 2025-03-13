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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotTopicsResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotTopicsResponseBody\data\structureSummary\docList;
use AlibabaCloud\Tea\Model;

class structureSummary extends Model
{
    /**
     * @var docList[]
     */
    public $docList;

    /**
     * @example 摘要
     *
     * @var string
     */
    public $summary;

    /**
     * @example 标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'docList' => 'DocList',
        'summary' => 'Summary',
        'title' => 'Title',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->docList) {
            $res['DocList'] = [];
            if (null !== $this->docList && \is_array($this->docList)) {
                $n = 0;
                foreach ($this->docList as $item) {
                    $res['DocList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structureSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocList'])) {
            if (!empty($map['DocList'])) {
                $model->docList = [];
                $n = 0;
                foreach ($map['DocList'] as $item) {
                    $model->docList[$n++] = null !== $item ? docList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
