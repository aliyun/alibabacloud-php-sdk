<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\constantParameters\constantParameter;

class constantParameters extends Model
{
    /**
     * @var constantParameter[]
     */
    public $constantParameter;
    protected $_name = [
        'constantParameter' => 'ConstantParameter',
    ];

    public function validate()
    {
        if (\is_array($this->constantParameter)) {
            Model::validateArray($this->constantParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->constantParameter) {
            if (\is_array($this->constantParameter)) {
                $res['ConstantParameter'] = [];
                $n1                       = 0;
                foreach ($this->constantParameter as $item1) {
                    $res['ConstantParameter'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConstantParameter'])) {
            if (!empty($map['ConstantParameter'])) {
                $model->constantParameter = [];
                $n1                       = 0;
                foreach ($map['ConstantParameter'] as $item1) {
                    $model->constantParameter[$n1++] = constantParameter::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
