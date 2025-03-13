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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult\searchResult;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult\searchResult\textGenerateMultimodalMediaList\multimodalMediaList;
use AlibabaCloud\Tea\Model;

class textGenerateMultimodalMediaList extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $docUuid;

    /**
     * @example 1
     *
     * @var int
     */
    public $end;

    /**
     * @var multimodalMediaList[]
     */
    public $multimodalMediaList;

    /**
     * @example 1
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'docUuid' => 'DocUuid',
        'end' => 'End',
        'multimodalMediaList' => 'MultimodalMediaList',
        'start' => 'Start',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->multimodalMediaList) {
            $res['MultimodalMediaList'] = [];
            if (null !== $this->multimodalMediaList && \is_array($this->multimodalMediaList)) {
                $n = 0;
                foreach ($this->multimodalMediaList as $item) {
                    $res['MultimodalMediaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textGenerateMultimodalMediaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['MultimodalMediaList'])) {
            if (!empty($map['MultimodalMediaList'])) {
                $model->multimodalMediaList = [];
                $n = 0;
                foreach ($map['MultimodalMediaList'] as $item) {
                    $model->multimodalMediaList[$n++] = null !== $item ? multimodalMediaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
