<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponseBody;

use AlibabaCloud\Dara\Model;

class availableTtls extends Model
{
    /**
     * @var string[]
     */
    public $availableTtl;
    protected $_name = [
        'availableTtl' => 'AvailableTtl',
    ];

    public function validate()
    {
        if (\is_array($this->availableTtl)) {
            Model::validateArray($this->availableTtl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableTtl) {
            if (\is_array($this->availableTtl)) {
                $res['AvailableTtl'] = [];
                $n1 = 0;
                foreach ($this->availableTtl as $item1) {
                    $res['AvailableTtl'][$n1] = $item1;
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
        if (isset($map['AvailableTtl'])) {
            if (!empty($map['AvailableTtl'])) {
                $model->availableTtl = [];
                $n1 = 0;
                foreach ($map['AvailableTtl'] as $item1) {
                    $model->availableTtl[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
