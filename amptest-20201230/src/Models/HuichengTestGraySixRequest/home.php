<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySixRequest;

use AlibabaCloud\SDK\AmpTest\V20201230\Models\HomeDMapValue;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySixRequest\home\address;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySixRequest\home\locations;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySixRequest\home\t;
use AlibabaCloud\Tea\Model;

class home extends Model
{
    /**
     * @var address
     */
    public $address;

    /**
     * @var HomeDMapValue[]
     */
    public $DMap;

    /**
     * @var locations[]
     */
    public $locations;

    /**
     * @var int[]
     */
    public $nameToAge;

    /**
     * @var string[]
     */
    public $phoneNumbers;

    /**
     * @var t
     */
    public $t;
    protected $_name = [
        'address'      => 'Address',
        'DMap'         => 'DMap',
        'locations'    => 'Locations',
        'nameToAge'    => 'NameToAge',
        'phoneNumbers' => 'PhoneNumbers',
        't'            => 'T',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = null !== $this->address ? $this->address->toMap() : null;
        }
        if (null !== $this->DMap) {
            $res['DMap'] = [];
            if (null !== $this->DMap && \is_array($this->DMap)) {
                foreach ($this->DMap as $key => $val) {
                    $res['DMap'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->locations) {
            $res['Locations'] = [];
            if (null !== $this->locations && \is_array($this->locations)) {
                $n = 0;
                foreach ($this->locations as $item) {
                    $res['Locations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nameToAge) {
            $res['NameToAge'] = $this->nameToAge;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = $this->phoneNumbers;
        }
        if (null !== $this->t) {
            $res['T'] = null !== $this->t ? $this->t->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return home
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = address::fromMap($map['Address']);
        }
        if (isset($map['DMap'])) {
            $model->DMap = $map['DMap'];
        }
        if (isset($map['Locations'])) {
            if (!empty($map['Locations'])) {
                $model->locations = [];
                $n                = 0;
                foreach ($map['Locations'] as $item) {
                    $model->locations[$n++] = null !== $item ? locations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NameToAge'])) {
            $model->nameToAge = $map['NameToAge'];
        }
        if (isset($map['PhoneNumbers'])) {
            if (!empty($map['PhoneNumbers'])) {
                $model->phoneNumbers = $map['PhoneNumbers'];
            }
        }
        if (isset($map['T'])) {
            $model->t = t::fromMap($map['T']);
        }

        return $model;
    }
}
