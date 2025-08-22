<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGeoInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGeoInfoResponseBody\content\continents;

class content extends Model
{
    /**
     * @var continents[]
     */
    public $continents;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'continents' => 'Continents',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->continents)) {
            Model::validateArray($this->continents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->continents) {
            if (\is_array($this->continents)) {
                $res['Continents'] = [];
                $n1 = 0;
                foreach ($this->continents as $item1) {
                    $res['Continents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Continents'])) {
            if (!empty($map['Continents'])) {
                $model->continents = [];
                $n1 = 0;
                foreach ($map['Continents'] as $item1) {
                    $model->continents[$n1] = continents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
