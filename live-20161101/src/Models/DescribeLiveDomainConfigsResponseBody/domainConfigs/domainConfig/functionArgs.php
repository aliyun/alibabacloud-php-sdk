<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainConfigsResponseBody\domainConfigs\domainConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainConfigsResponseBody\domainConfigs\domainConfig\functionArgs\functionArg;

class functionArgs extends Model
{
    /**
     * @var functionArg[]
     */
    public $functionArg;
    protected $_name = [
        'functionArg' => 'FunctionArg',
    ];

    public function validate()
    {
        if (\is_array($this->functionArg)) {
            Model::validateArray($this->functionArg);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functionArg) {
            if (\is_array($this->functionArg)) {
                $res['FunctionArg'] = [];
                $n1 = 0;
                foreach ($this->functionArg as $item1) {
                    $res['FunctionArg'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FunctionArg'])) {
            if (!empty($map['FunctionArg'])) {
                $model->functionArg = [];
                $n1 = 0;
                foreach ($map['FunctionArg'] as $item1) {
                    $model->functionArg[$n1] = functionArg::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
