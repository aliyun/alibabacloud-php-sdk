<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationParametersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationParametersResponseBody\parameterTemplates\componentParameterTemplates;

class parameterTemplates extends Model
{
    /**
     * @var componentParameterTemplates[]
     */
    public $componentParameterTemplates;
    protected $_name = [
        'componentParameterTemplates' => 'ComponentParameterTemplates',
    ];

    public function validate()
    {
        if (\is_array($this->componentParameterTemplates)) {
            Model::validateArray($this->componentParameterTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentParameterTemplates) {
            if (\is_array($this->componentParameterTemplates)) {
                $res['ComponentParameterTemplates'] = [];
                $n1 = 0;
                foreach ($this->componentParameterTemplates as $item1) {
                    $res['ComponentParameterTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ComponentParameterTemplates'])) {
            if (!empty($map['ComponentParameterTemplates'])) {
                $model->componentParameterTemplates = [];
                $n1 = 0;
                foreach ($map['ComponentParameterTemplates'] as $item1) {
                    $model->componentParameterTemplates[$n1] = componentParameterTemplates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
