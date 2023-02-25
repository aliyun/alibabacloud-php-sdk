<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGeoInfoResponseBody\content;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGeoInfoResponseBody\content\continents\regions;
use AlibabaCloud\Tea\Model;

class continents extends Model
{
    /**
     * @description The district to which the country or region belongs.
     *
     * @var string
     */
    public $name;

    /**
     * @description The region information.
     *
     * @var regions[]
     */
    public $regions;
    protected $_name = [
        'name'    => 'Name',
        'regions' => 'Regions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regions) {
            $res['Regions'] = [];
            if (null !== $this->regions && \is_array($this->regions)) {
                $n = 0;
                foreach ($this->regions as $item) {
                    $res['Regions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return continents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n              = 0;
                foreach ($map['Regions'] as $item) {
                    $model->regions[$n++] = null !== $item ? regions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
