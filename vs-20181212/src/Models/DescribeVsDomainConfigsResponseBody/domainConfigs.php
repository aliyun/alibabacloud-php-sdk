<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainConfigsResponseBody\domainConfigs\functionArgs;

class domainConfigs extends Model
{
    /**
     * @var string
     */
    public $configId;

    /**
     * @var functionArgs[]
     */
    public $functionArgs;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'configId' => 'ConfigId',
        'functionArgs' => 'FunctionArgs',
        'functionName' => 'FunctionName',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->functionArgs)) {
            Model::validateArray($this->functionArgs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->functionArgs) {
            if (\is_array($this->functionArgs)) {
                $res['FunctionArgs'] = [];
                $n1 = 0;
                foreach ($this->functionArgs as $item1) {
                    $res['FunctionArgs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['FunctionArgs'])) {
            if (!empty($map['FunctionArgs'])) {
                $model->functionArgs = [];
                $n1 = 0;
                foreach ($map['FunctionArgs'] as $item1) {
                    $model->functionArgs[$n1] = functionArgs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
