<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesResponseBody\failedListResult\target;

class failedListResult extends Model
{
    /**
     * @var target[]
     */
    public $target;
    protected $_name = [
        'target' => 'Target',
    ];

    public function validate()
    {
        if (\is_array($this->target)) {
            Model::validateArray($this->target);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->target) {
            if (\is_array($this->target)) {
                $res['Target'] = [];
                $n1 = 0;
                foreach ($this->target as $item1) {
                    $res['Target'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Target'])) {
            if (!empty($map['Target'])) {
                $model->target = [];
                $n1 = 0;
                foreach ($map['Target'] as $item1) {
                    $model->target[$n1] = target::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
