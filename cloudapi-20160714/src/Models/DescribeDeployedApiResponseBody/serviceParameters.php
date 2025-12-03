<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceParameters\serviceParameter;

class serviceParameters extends Model
{
    /**
     * @var serviceParameter[]
     */
    public $serviceParameter;
    protected $_name = [
        'serviceParameter' => 'ServiceParameter',
    ];

    public function validate()
    {
        if (\is_array($this->serviceParameter)) {
            Model::validateArray($this->serviceParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceParameter) {
            if (\is_array($this->serviceParameter)) {
                $res['ServiceParameter'] = [];
                $n1 = 0;
                foreach ($this->serviceParameter as $item1) {
                    $res['ServiceParameter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ServiceParameter'])) {
            if (!empty($map['ServiceParameter'])) {
                $model->serviceParameter = [];
                $n1 = 0;
                foreach ($map['ServiceParameter'] as $item1) {
                    $model->serviceParameter[$n1] = serviceParameter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
