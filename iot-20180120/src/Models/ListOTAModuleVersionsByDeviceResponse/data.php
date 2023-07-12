<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAModuleVersionsByDeviceResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAModuleVersionsByDeviceResponse\data\simpleOTAModuleInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var simpleOTAModuleInfo[]
     */
    public $simpleOTAModuleInfo;
    protected $_name = [
        'simpleOTAModuleInfo' => 'SimpleOTAModuleInfo',
    ];

    public function validate()
    {
        Model::validateRequired('simpleOTAModuleInfo', $this->simpleOTAModuleInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->simpleOTAModuleInfo) {
            $res['SimpleOTAModuleInfo'] = [];
            if (null !== $this->simpleOTAModuleInfo && \is_array($this->simpleOTAModuleInfo)) {
                $n = 0;
                foreach ($this->simpleOTAModuleInfo as $item) {
                    $res['SimpleOTAModuleInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['SimpleOTAModuleInfo'])) {
            if (!empty($map['SimpleOTAModuleInfo'])) {
                $model->simpleOTAModuleInfo = [];
                $n                          = 0;
                foreach ($map['SimpleOTAModuleInfo'] as $item) {
                    $model->simpleOTAModuleInfo[$n++] = null !== $item ? simpleOTAModuleInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
