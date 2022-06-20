<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryImportedDeviceByApplyIdResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryImportedDeviceByApplyIdResponseBody\deviceList\device;
use AlibabaCloud\Tea\Model;

class deviceList extends Model
{
    /**
     * @var device[]
     */
    public $device;
    protected $_name = [
        'device' => 'device',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->device) {
            $res['device'] = [];
            if (null !== $this->device && \is_array($this->device)) {
                $n = 0;
                foreach ($this->device as $item) {
                    $res['device'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['device'])) {
            if (!empty($map['device'])) {
                $model->device = [];
                $n             = 0;
                foreach ($map['device'] as $item) {
                    $model->device[$n++] = null !== $item ? device::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
