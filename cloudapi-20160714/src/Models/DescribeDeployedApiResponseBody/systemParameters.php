<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\systemParameters\systemParameter;

class systemParameters extends Model
{
    /**
     * @var systemParameter[]
     */
    public $systemParameter;
    protected $_name = [
        'systemParameter' => 'SystemParameter',
    ];

    public function validate()
    {
        if (\is_array($this->systemParameter)) {
            Model::validateArray($this->systemParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->systemParameter) {
            if (\is_array($this->systemParameter)) {
                $res['SystemParameter'] = [];
                $n1 = 0;
                foreach ($this->systemParameter as $item1) {
                    $res['SystemParameter'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SystemParameter'])) {
            if (!empty($map['SystemParameter'])) {
                $model->systemParameter = [];
                $n1 = 0;
                foreach ($map['SystemParameter'] as $item1) {
                    $model->systemParameter[$n1++] = systemParameter::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
