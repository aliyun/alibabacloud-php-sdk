<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\SearchAcrossCatalogResponseBody\catalogResult;

use AlibabaCloud\SDK\DataLake\V20200710\Models\Catalog;
use AlibabaCloud\SDK\DataLake\V20200710\Models\HighLight;
use AlibabaCloud\Tea\Model;

class catalogs extends Model
{
    /**
     * @var Catalog
     */
    public $catalog;

    /**
     * @var HighLight[]
     */
    public $highLightList;
    protected $_name = [
        'catalog'       => 'Catalog',
        'highLightList' => 'HighLightList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalog) {
            $res['Catalog'] = null !== $this->catalog ? $this->catalog->toMap() : null;
        }
        if (null !== $this->highLightList) {
            $res['HighLightList'] = [];
            if (null !== $this->highLightList && \is_array($this->highLightList)) {
                $n = 0;
                foreach ($this->highLightList as $item) {
                    $res['HighLightList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return catalogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Catalog'])) {
            $model->catalog = Catalog::fromMap($map['Catalog']);
        }
        if (isset($map['HighLightList'])) {
            if (!empty($map['HighLightList'])) {
                $model->highLightList = [];
                $n                    = 0;
                foreach ($map['HighLightList'] as $item) {
                    $model->highLightList[$n++] = null !== $item ? HighLight::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
