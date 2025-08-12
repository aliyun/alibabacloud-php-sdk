<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponseBody\templates\template;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponseBody\templates\template\applyHistories\applyHistory;

class applyHistories extends Model
{
    /**
     * @var applyHistory[]
     */
    public $applyHistory;
    protected $_name = [
        'applyHistory' => 'ApplyHistory',
    ];

    public function validate()
    {
        if (\is_array($this->applyHistory)) {
            Model::validateArray($this->applyHistory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyHistory) {
            if (\is_array($this->applyHistory)) {
                $res['ApplyHistory'] = [];
                $n1 = 0;
                foreach ($this->applyHistory as $item1) {
                    $res['ApplyHistory'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ApplyHistory'])) {
            if (!empty($map['ApplyHistory'])) {
                $model->applyHistory = [];
                $n1 = 0;
                foreach ($map['ApplyHistory'] as $item1) {
                    $model->applyHistory[$n1] = applyHistory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
