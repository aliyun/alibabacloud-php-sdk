<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\BatchBindDeviceResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20230630\Models\BatchBindDeviceResponseBody\data\bindDeviceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bindDeviceList[]
     */
    public $bindDeviceList;
    protected $_name = [
        'bindDeviceList' => 'BindDeviceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindDeviceList) {
            $res['BindDeviceList'] = [];
            if (null !== $this->bindDeviceList && \is_array($this->bindDeviceList)) {
                $n = 0;
                foreach ($this->bindDeviceList as $item) {
                    $res['BindDeviceList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['BindDeviceList'])) {
            if (!empty($map['BindDeviceList'])) {
                $model->bindDeviceList = [];
                $n                     = 0;
                foreach ($map['BindDeviceList'] as $item) {
                    $model->bindDeviceList[$n++] = null !== $item ? bindDeviceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
