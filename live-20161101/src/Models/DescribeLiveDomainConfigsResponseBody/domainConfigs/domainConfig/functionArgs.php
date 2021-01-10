<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainConfigsResponseBody\domainConfigs\domainConfig;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainConfigsResponseBody\domainConfigs\domainConfig\functionArgs\functionArg;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionArg) {
            $res['FunctionArg'] = [];
            if (null !== $this->functionArg && \is_array($this->functionArg)) {
                $n = 0;
                foreach ($this->functionArg as $item) {
                    $res['FunctionArg'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functionArgs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionArg'])) {
            if (!empty($map['FunctionArg'])) {
                $model->functionArg = [];
                $n                  = 0;
                foreach ($map['FunctionArg'] as $item) {
                    $model->functionArg[$n++] = null !== $item ? functionArg::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
