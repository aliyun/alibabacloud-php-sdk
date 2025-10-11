<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationParametersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationParametersResponseBody\parameters\componentParameters;

class parameters extends Model
{
    /**
     * @var componentParameters[]
     */
    public $componentParameters;
    protected $_name = [
        'componentParameters' => 'ComponentParameters',
    ];

    public function validate()
    {
        if (\is_array($this->componentParameters)) {
            Model::validateArray($this->componentParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentParameters) {
            if (\is_array($this->componentParameters)) {
                $res['ComponentParameters'] = [];
                $n1 = 0;
                foreach ($this->componentParameters as $item1) {
                    $res['ComponentParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ComponentParameters'])) {
            if (!empty($map['ComponentParameters'])) {
                $model->componentParameters = [];
                $n1 = 0;
                foreach ($map['ComponentParameters'] as $item1) {
                    $model->componentParameters[$n1] = componentParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
