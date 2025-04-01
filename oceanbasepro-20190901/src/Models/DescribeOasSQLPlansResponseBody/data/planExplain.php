<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLPlansResponseBody\data;

use AlibabaCloud\Dara\Model;

class planExplain extends Model
{
    /**
     * @var string
     */
    public $planJsonString;
    protected $_name = [
        'planJsonString' => 'PlanJsonString',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->planJsonString) {
            $res['PlanJsonString'] = $this->planJsonString;
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
        if (isset($map['PlanJsonString'])) {
            $model->planJsonString = $map['PlanJsonString'];
        }

        return $model;
    }
}
