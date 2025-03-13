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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\topicSummaryResult\summaries;
use AlibabaCloud\Tea\Model;

class topicSummaryResult extends Model
{
    /**
     * @var summaries[]
     */
    public $summaries;
    protected $_name = [
        'summaries' => 'Summaries',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->summaries) {
            $res['Summaries'] = [];
            if (null !== $this->summaries && \is_array($this->summaries)) {
                $n = 0;
                foreach ($this->summaries as $item) {
                    $res['Summaries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topicSummaryResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Summaries'])) {
            if (!empty($map['Summaries'])) {
                $model->summaries = [];
                $n = 0;
                foreach ($map['Summaries'] as $item) {
                    $model->summaries[$n++] = null !== $item ? summaries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
