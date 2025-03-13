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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\tagDimensionStatistics\tagValueCountStatistic;
use AlibabaCloud\Tea\Model;

class tagDimensionStatistics extends Model
{
    /**
     * @var tagValueCountStatistic[]
     */
    public $tagValueCountStatistic;
    protected $_name = [
        'tagValueCountStatistic' => 'TagValueCountStatistic',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagValueCountStatistic) {
            $res['TagValueCountStatistic'] = [];
            if (null !== $this->tagValueCountStatistic && \is_array($this->tagValueCountStatistic)) {
                $n = 0;
                foreach ($this->tagValueCountStatistic as $item) {
                    $res['TagValueCountStatistic'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagDimensionStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagValueCountStatistic'])) {
            if (!empty($map['TagValueCountStatistic'])) {
                $model->tagValueCountStatistic = [];
                $n = 0;
                foreach ($map['TagValueCountStatistic'] as $item) {
                    $model->tagValueCountStatistic[$n++] = null !== $item ? tagValueCountStatistic::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
