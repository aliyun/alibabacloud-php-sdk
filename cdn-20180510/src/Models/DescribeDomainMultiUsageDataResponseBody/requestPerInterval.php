<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponseBody\requestPerInterval\requestDataModule;

class requestPerInterval extends Model
{
    /**
     * @var requestDataModule[]
     */
    public $requestDataModule;
    protected $_name = [
        'requestDataModule' => 'RequestDataModule',
    ];

    public function validate()
    {
        if (\is_array($this->requestDataModule)) {
            Model::validateArray($this->requestDataModule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestDataModule) {
            if (\is_array($this->requestDataModule)) {
                $res['RequestDataModule'] = [];
                $n1 = 0;
                foreach ($this->requestDataModule as $item1) {
                    $res['RequestDataModule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestDataModule'])) {
            if (!empty($map['RequestDataModule'])) {
                $model->requestDataModule = [];
                $n1 = 0;
                foreach ($map['RequestDataModule'] as $item1) {
                    $model->requestDataModule[$n1] = requestDataModule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
