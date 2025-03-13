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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\chatConfig;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\chatConfig\searchParam\searchSources;
use AlibabaCloud\Tea\Model;

class searchParam extends Model
{
    /**
     * @example 1725983999999
     *
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $multimodalSearchTypes;

    /**
     * @var searchSources[]
     */
    public $searchSources;

    /**
     * @example 1725983999999
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'multimodalSearchTypes' => 'MultimodalSearchTypes',
        'searchSources' => 'SearchSources',
        'startTime' => 'StartTime',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->multimodalSearchTypes) {
            $res['MultimodalSearchTypes'] = $this->multimodalSearchTypes;
        }
        if (null !== $this->searchSources) {
            $res['SearchSources'] = [];
            if (null !== $this->searchSources && \is_array($this->searchSources)) {
                $n = 0;
                foreach ($this->searchSources as $item) {
                    $res['SearchSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MultimodalSearchTypes'])) {
            if (!empty($map['MultimodalSearchTypes'])) {
                $model->multimodalSearchTypes = $map['MultimodalSearchTypes'];
            }
        }
        if (isset($map['SearchSources'])) {
            if (!empty($map['SearchSources'])) {
                $model->searchSources = [];
                $n = 0;
                foreach ($map['SearchSources'] as $item) {
                    $model->searchSources[$n++] = null !== $item ? searchSources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
