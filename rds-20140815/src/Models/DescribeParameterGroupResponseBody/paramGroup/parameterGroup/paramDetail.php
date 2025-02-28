<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\paramGroup\parameterGroup;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\paramGroup\parameterGroup\paramDetail\parameterDetail;

class paramDetail extends Model
{
    /**
     * @var parameterDetail[]
     */
    public $parameterDetail;
    protected $_name = [
        'parameterDetail' => 'ParameterDetail',
    ];

    public function validate()
    {
        if (\is_array($this->parameterDetail)) {
            Model::validateArray($this->parameterDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterDetail) {
            if (\is_array($this->parameterDetail)) {
                $res['ParameterDetail'] = [];
                $n1                     = 0;
                foreach ($this->parameterDetail as $item1) {
                    $res['ParameterDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ParameterDetail'])) {
            if (!empty($map['ParameterDetail'])) {
                $model->parameterDetail = [];
                $n1                     = 0;
                foreach ($map['ParameterDetail'] as $item1) {
                    $model->parameterDetail[$n1++] = parameterDetail::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
