<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceByTagsResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceByTagsResponse\data\simpleDeviceInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var simpleDeviceInfo[]
     */
    public $simpleDeviceInfo;
    protected $_name = [
        'simpleDeviceInfo' => 'SimpleDeviceInfo',
    ];

    public function validate()
    {
        Model::validateRequired('simpleDeviceInfo', $this->simpleDeviceInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->simpleDeviceInfo) {
            $res['SimpleDeviceInfo'] = [];
            if (null !== $this->simpleDeviceInfo && \is_array($this->simpleDeviceInfo)) {
                $n = 0;
                foreach ($this->simpleDeviceInfo as $item) {
                    $res['SimpleDeviceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SimpleDeviceInfo'])) {
            if (!empty($map['SimpleDeviceInfo'])) {
                $model->simpleDeviceInfo = [];
                $n                       = 0;
                foreach ($map['SimpleDeviceInfo'] as $item) {
                    $model->simpleDeviceInfo[$n++] = null !== $item ? simpleDeviceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
