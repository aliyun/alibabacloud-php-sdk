<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingRulesResponseBody\data\scaleRules;

class data extends Model
{
    /**
     * @var scaleRules[]
     */
    public $scaleRules;
    protected $_name = [
        'scaleRules' => 'ScaleRules',
    ];

    public function validate()
    {
        if (\is_array($this->scaleRules)) {
            Model::validateArray($this->scaleRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scaleRules) {
            if (\is_array($this->scaleRules)) {
                $res['ScaleRules'] = [];
                $n1 = 0;
                foreach ($this->scaleRules as $item1) {
                    $res['ScaleRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ScaleRules'])) {
            if (!empty($map['ScaleRules'])) {
                $model->scaleRules = [];
                $n1 = 0;
                foreach ($map['ScaleRules'] as $item1) {
                    $model->scaleRules[$n1++] = scaleRules::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
