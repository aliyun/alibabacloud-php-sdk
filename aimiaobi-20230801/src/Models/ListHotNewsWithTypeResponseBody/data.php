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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeResponseBody\data\news;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var news[]
     */
    public $news;

    /**
     * @example society
     *
     * @var string
     */
    public $newsType;

    /**
     * @var string
     */
    public $newsTypeName;

    /**
     * @example 77
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'news' => 'News',
        'newsType' => 'NewsType',
        'newsTypeName' => 'NewsTypeName',
        'totalPages' => 'TotalPages',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->news) {
            $res['News'] = [];
            if (null !== $this->news && \is_array($this->news)) {
                $n = 0;
                foreach ($this->news as $item) {
                    $res['News'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->newsType) {
            $res['NewsType'] = $this->newsType;
        }
        if (null !== $this->newsTypeName) {
            $res['NewsTypeName'] = $this->newsTypeName;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['News'])) {
            if (!empty($map['News'])) {
                $model->news = [];
                $n = 0;
                foreach ($map['News'] as $item) {
                    $model->news[$n++] = null !== $item ? news::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NewsType'])) {
            $model->newsType = $map['NewsType'];
        }
        if (isset($map['NewsTypeName'])) {
            $model->newsTypeName = $map['NewsTypeName'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
