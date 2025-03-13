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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult\multimodalSearchResultList\searchResult;
use AlibabaCloud\Tea\Model;

class multimodalSearchResultList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example xx
     *
     * @var string
     */
    public $searchQuery;

    /**
     * @var searchResult[]
     */
    public $searchResult;

    /**
     * @example realtime
     *
     * @var string
     */
    public $searchType;

    /**
     * @example 1
     *
     * @var int
     */
    public $size;

    /**
     * @example 时间脉络-时间
     *
     * @var string
     */
    public $timelineDateStr;

    /**
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'current' => 'Current',
        'searchQuery' => 'SearchQuery',
        'searchResult' => 'SearchResult',
        'searchType' => 'SearchType',
        'size' => 'Size',
        'timelineDateStr' => 'TimelineDateStr',
        'total' => 'Total',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->searchQuery) {
            $res['SearchQuery'] = $this->searchQuery;
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
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->timelineDateStr) {
            $res['TimelineDateStr'] = $this->timelineDateStr;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multimodalSearchResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['SearchQuery'])) {
            $model->searchQuery = $map['SearchQuery'];
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
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['TimelineDateStr'])) {
            $model->timelineDateStr = $map['TimelineDateStr'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
