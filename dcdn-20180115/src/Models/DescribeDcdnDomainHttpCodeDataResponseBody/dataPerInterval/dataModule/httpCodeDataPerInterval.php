<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHttpCodeDataResponseBody\dataPerInterval\dataModule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHttpCodeDataResponseBody\dataPerInterval\dataModule\httpCodeDataPerInterval\httpCodeDataModule;

class httpCodeDataPerInterval extends Model
{
    /**
     * @var httpCodeDataModule[]
     */
    public $httpCodeDataModule;
    protected $_name = [
        'httpCodeDataModule' => 'HttpCodeDataModule',
    ];

    public function validate()
    {
        if (\is_array($this->httpCodeDataModule)) {
            Model::validateArray($this->httpCodeDataModule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->httpCodeDataModule) {
            if (\is_array($this->httpCodeDataModule)) {
                $res['HttpCodeDataModule'] = [];
                $n1 = 0;
                foreach ($this->httpCodeDataModule as $item1) {
                    $res['HttpCodeDataModule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HttpCodeDataModule'])) {
            if (!empty($map['HttpCodeDataModule'])) {
                $model->httpCodeDataModule = [];
                $n1 = 0;
                foreach ($map['HttpCodeDataModule'] as $item1) {
                    $model->httpCodeDataModule[$n1] = httpCodeDataModule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
