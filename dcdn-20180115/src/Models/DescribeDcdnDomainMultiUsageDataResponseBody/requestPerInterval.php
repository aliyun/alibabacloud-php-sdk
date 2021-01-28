<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainMultiUsageDataResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainMultiUsageDataResponseBody\requestPerInterval\requestDataModule;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestDataModule) {
            $res['RequestDataModule'] = [];
            if (null !== $this->requestDataModule && \is_array($this->requestDataModule)) {
                $n = 0;
                foreach ($this->requestDataModule as $item) {
                    $res['RequestDataModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestPerInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestDataModule'])) {
            if (!empty($map['RequestDataModule'])) {
                $model->requestDataModule = [];
                $n                        = 0;
                foreach ($map['RequestDataModule'] as $item) {
                    $model->requestDataModule[$n++] = null !== $item ? requestDataModule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
