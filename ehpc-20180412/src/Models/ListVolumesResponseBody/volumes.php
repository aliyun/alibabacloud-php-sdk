<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListVolumesResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListVolumesResponseBody\volumes\volumeInfo;
use AlibabaCloud\Tea\Model;

class volumes extends Model
{
    /**
     * @var volumeInfo[]
     */
    public $volumeInfo;
    protected $_name = [
        'volumeInfo' => 'VolumeInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->volumeInfo) {
            $res['VolumeInfo'] = [];
            if (null !== $this->volumeInfo && \is_array($this->volumeInfo)) {
                $n = 0;
                foreach ($this->volumeInfo as $item) {
                    $res['VolumeInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volumes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VolumeInfo'])) {
            if (!empty($map['VolumeInfo'])) {
                $model->volumeInfo = [];
                $n                 = 0;
                foreach ($map['VolumeInfo'] as $item) {
                    $model->volumeInfo[$n++] = null !== $item ? volumeInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
