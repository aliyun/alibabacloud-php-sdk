<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstanceDataInfosResponseBody;

use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstanceDataInfosResponseBody\dataInfos\dataInfo;
use AlibabaCloud\Tea\Model;

class dataInfos extends Model
{
    /**
     * @var dataInfo[]
     */
    public $dataInfo;
    protected $_name = [
        'dataInfo' => 'DataInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInfo) {
            $res['DataInfo'] = [];
            if (null !== $this->dataInfo && \is_array($this->dataInfo)) {
                $n = 0;
                foreach ($this->dataInfo as $item) {
                    $res['DataInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInfo'])) {
            if (!empty($map['DataInfo'])) {
                $model->dataInfo = [];
                $n               = 0;
                foreach ($map['DataInfo'] as $item) {
                    $model->dataInfo[$n++] = null !== $item ? dataInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
