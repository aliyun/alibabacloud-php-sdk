<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesResponseBody\privateZoneInfos\privateZoneInfo;
use AlibabaCloud\Tea\Model;

class privateZoneInfos extends Model
{
    /**
     * @var privateZoneInfo[]
     */
    public $privateZoneInfo;
    protected $_name = [
        'privateZoneInfo' => 'PrivateZoneInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateZoneInfo) {
            $res['PrivateZoneInfo'] = [];
            if (null !== $this->privateZoneInfo && \is_array($this->privateZoneInfo)) {
                $n = 0;
                foreach ($this->privateZoneInfo as $item) {
                    $res['PrivateZoneInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateZoneInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateZoneInfo'])) {
            if (!empty($map['PrivateZoneInfo'])) {
                $model->privateZoneInfo = [];
                $n                      = 0;
                foreach ($map['PrivateZoneInfo'] as $item) {
                    $model->privateZoneInfo[$n++] = null !== $item ? privateZoneInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
