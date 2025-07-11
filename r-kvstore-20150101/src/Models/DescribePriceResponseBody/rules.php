<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\rules\rule;

class rules extends Model
{
    /**
     * @var rule[]
     */
    public $rule;
    protected $_name = [
        'rule' => 'Rule',
    ];

    public function validate()
    {
        if (\is_array($this->rule)) {
            Model::validateArray($this->rule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rule) {
            if (\is_array($this->rule)) {
                $res['Rule'] = [];
                $n1 = 0;
                foreach ($this->rule as $item1) {
                    $res['Rule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Rule'])) {
            if (!empty($map['Rule'])) {
                $model->rule = [];
                $n1 = 0;
                foreach ($map['Rule'] as $item1) {
                    $model->rule[$n1] = rule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
