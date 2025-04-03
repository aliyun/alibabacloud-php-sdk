<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\hotViewPointsResult\attitudes;

class hotViewPointsResult extends Model
{
    /**
     * @var attitudes[]
     */
    public $attitudes;
    protected $_name = [
        'attitudes' => 'Attitudes',
    ];

    public function validate()
    {
        if (\is_array($this->attitudes)) {
            Model::validateArray($this->attitudes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attitudes) {
            if (\is_array($this->attitudes)) {
                $res['Attitudes'] = [];
                $n1 = 0;
                foreach ($this->attitudes as $item1) {
                    $res['Attitudes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attitudes'])) {
            if (!empty($map['Attitudes'])) {
                $model->attitudes = [];
                $n1 = 0;
                foreach ($map['Attitudes'] as $item1) {
                    $model->attitudes[$n1++] = attitudes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
