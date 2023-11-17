<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\UnbindAllUserByDeviceResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20230630\Models\UnbindAllUserByDeviceResponseBody\data\subDeviceUnbindResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var subDeviceUnbindResult[]
     */
    public $subDeviceUnbindResult;
    protected $_name = [
        'subDeviceUnbindResult' => 'SubDeviceUnbindResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subDeviceUnbindResult) {
            $res['SubDeviceUnbindResult'] = [];
            if (null !== $this->subDeviceUnbindResult && \is_array($this->subDeviceUnbindResult)) {
                $n = 0;
                foreach ($this->subDeviceUnbindResult as $item) {
                    $res['SubDeviceUnbindResult'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['SubDeviceUnbindResult'])) {
            if (!empty($map['SubDeviceUnbindResult'])) {
                $model->subDeviceUnbindResult = [];
                $n                            = 0;
                foreach ($map['SubDeviceUnbindResult'] as $item) {
                    $model->subDeviceUnbindResult[$n++] = null !== $item ? subDeviceUnbindResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
