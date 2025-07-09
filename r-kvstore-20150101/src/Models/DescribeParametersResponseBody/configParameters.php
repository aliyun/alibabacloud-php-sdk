<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParametersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParametersResponseBody\configParameters\parameter;

class configParameters extends Model
{
    /**
     * @var parameter[]
     */
    public $parameter;
    protected $_name = [
        'parameter' => 'Parameter',
    ];

    public function validate()
    {
        if (\is_array($this->parameter)) {
            Model::validateArray($this->parameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameter) {
            if (\is_array($this->parameter)) {
                $res['Parameter'] = [];
                $n1 = 0;
                foreach ($this->parameter as $item1) {
                    $res['Parameter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Parameter'])) {
            if (!empty($map['Parameter'])) {
                $model->parameter = [];
                $n1 = 0;
                foreach ($map['Parameter'] as $item1) {
                    $model->parameter[$n1] = parameter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
