<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainBpsDataByLayerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainBpsDataByLayerResponseBody\bpsDataInterval\dataModule;

class bpsDataInterval extends Model
{
    /**
     * @var dataModule[]
     */
    public $dataModule;
    protected $_name = [
        'dataModule' => 'DataModule',
    ];

    public function validate()
    {
        if (\is_array($this->dataModule)) {
            Model::validateArray($this->dataModule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataModule) {
            if (\is_array($this->dataModule)) {
                $res['DataModule'] = [];
                $n1 = 0;
                foreach ($this->dataModule as $item1) {
                    $res['DataModule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataModule'])) {
            if (!empty($map['DataModule'])) {
                $model->dataModule = [];
                $n1 = 0;
                foreach ($map['DataModule'] as $item1) {
                    $model->dataModule[$n1] = dataModule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
