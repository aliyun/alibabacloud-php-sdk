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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesRequest\chatConfig;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesRequest\chatConfig\searchParam\searchSources;
use AlibabaCloud\Tea\Model;

class searchParam extends Model
{
    /**
     * @var searchSources[]
     */
    public $searchSources;
    protected $_name = [
        'searchSources' => 'SearchSources',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchSources) {
            $res['SearchSources'] = [];
            if (null !== $this->searchSources && \is_array($this->searchSources)) {
                $n = 0;
                foreach ($this->searchSources as $item) {
                    $res['SearchSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchSources'])) {
            if (!empty($map['SearchSources'])) {
                $model->searchSources = [];
                $n = 0;
                foreach ($map['SearchSources'] as $item) {
                    $model->searchSources[$n++] = null !== $item ? searchSources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
