<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryPageByApplyIdResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryPageByApplyIdResponse\applyDeviceList\applyDeviceInfo;
use AlibabaCloud\Tea\Model;

class applyDeviceList extends Model
{
    /**
     * @var applyDeviceInfo[]
     */
    public $applyDeviceInfo;
    protected $_name = [
        'applyDeviceInfo' => 'ApplyDeviceInfo',
    ];

    public function validate()
    {
        Model::validateRequired('applyDeviceInfo', $this->applyDeviceInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyDeviceInfo) {
            $res['ApplyDeviceInfo'] = [];
            if (null !== $this->applyDeviceInfo && \is_array($this->applyDeviceInfo)) {
                $n = 0;
                foreach ($this->applyDeviceInfo as $item) {
                    $res['ApplyDeviceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyDeviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyDeviceInfo'])) {
            if (!empty($map['ApplyDeviceInfo'])) {
                $model->applyDeviceInfo = [];
                $n                      = 0;
                foreach ($map['ApplyDeviceInfo'] as $item) {
                    $model->applyDeviceInfo[$n++] = null !== $item ? applyDeviceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
