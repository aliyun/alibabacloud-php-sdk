<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody\parameters\parameters[]
     */
    public $parameters;
    protected $_name = [
        'parameters' => 'Parameters',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1                = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1                = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1++] = \AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody\parameters\parameters::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
