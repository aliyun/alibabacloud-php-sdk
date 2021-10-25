<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImageGatewayConfigResponseBody\imagegw;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImageGatewayConfigResponseBody\imagegw\locations\locationInfo;
use AlibabaCloud\Tea\Model;

class locations extends Model
{
    /**
     * @var locationInfo[]
     */
    public $locationInfo;
    protected $_name = [
        'locationInfo' => 'LocationInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locationInfo) {
            $res['LocationInfo'] = [];
            if (null !== $this->locationInfo && \is_array($this->locationInfo)) {
                $n = 0;
                foreach ($this->locationInfo as $item) {
                    $res['LocationInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return locations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocationInfo'])) {
            if (!empty($map['LocationInfo'])) {
                $model->locationInfo = [];
                $n                   = 0;
                foreach ($map['LocationInfo'] as $item) {
                    $model->locationInfo[$n++] = null !== $item ? locationInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
