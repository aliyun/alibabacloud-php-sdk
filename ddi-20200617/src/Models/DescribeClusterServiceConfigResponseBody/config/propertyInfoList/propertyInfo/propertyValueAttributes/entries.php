<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo\propertyValueAttributes;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo\propertyValueAttributes\entries\valueEntryInfo;
use AlibabaCloud\Tea\Model;

class entries extends Model
{
    /**
     * @var valueEntryInfo[]
     */
    public $valueEntryInfo;
    protected $_name = [
        'valueEntryInfo' => 'ValueEntryInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->valueEntryInfo) {
            $res['ValueEntryInfo'] = [];
            if (null !== $this->valueEntryInfo && \is_array($this->valueEntryInfo)) {
                $n = 0;
                foreach ($this->valueEntryInfo as $item) {
                    $res['ValueEntryInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ValueEntryInfo'])) {
            if (!empty($map['ValueEntryInfo'])) {
                $model->valueEntryInfo = [];
                $n                     = 0;
                foreach ($map['ValueEntryInfo'] as $item) {
                    $model->valueEntryInfo[$n++] = null !== $item ? valueEntryInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
