<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command;

use AlibabaCloud\Dara\Model;

class parameterNames extends Model
{
    /**
     * @var string[]
     */
    public $parameterName;
    protected $_name = [
        'parameterName' => 'ParameterName',
    ];

    public function validate()
    {
        if (\is_array($this->parameterName)) {
            Model::validateArray($this->parameterName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterName) {
            if (\is_array($this->parameterName)) {
                $res['ParameterName'] = [];
                $n1 = 0;
                foreach ($this->parameterName as $item1) {
                    $res['ParameterName'][$n1++] = $item1;
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
        if (isset($map['ParameterName'])) {
            if (!empty($map['ParameterName'])) {
                $model->parameterName = [];
                $n1 = 0;
                foreach ($map['ParameterName'] as $item1) {
                    $model->parameterName[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
