<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report\issues\issue;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report\issues\issue\recommendedActions\recommendedAction;
use AlibabaCloud\Tea\Model;

class recommendedActions extends Model
{
    /**
     * @var recommendedAction[]
     */
    public $recommendedAction;
    protected $_name = [
        'recommendedAction' => 'RecommendedAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendedAction) {
            $res['RecommendedAction'] = [];
            if (null !== $this->recommendedAction && \is_array($this->recommendedAction)) {
                $n = 0;
                foreach ($this->recommendedAction as $item) {
                    $res['RecommendedAction'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendedActions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendedAction'])) {
            if (!empty($map['RecommendedAction'])) {
                $model->recommendedAction = [];
                $n                        = 0;
                foreach ($map['RecommendedAction'] as $item) {
                    $model->recommendedAction[$n++] = null !== $item ? recommendedAction::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
