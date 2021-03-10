<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponse\data\jobInfo\items;

use AlibabaCloud\Tea\Model;

class targetInstanceConfigs extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponse\data\jobInfo\items\targetInstanceConfigs\targetInstanceConfigs[]
     */
    public $targetInstanceConfigs;
    protected $_name = [
        'targetInstanceConfigs' => 'targetInstanceConfigs',
    ];

    public function validate()
    {
        Model::validateRequired('targetInstanceConfigs', $this->targetInstanceConfigs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetInstanceConfigs) {
            $res['targetInstanceConfigs'] = [];
            if (null !== $this->targetInstanceConfigs && \is_array($this->targetInstanceConfigs)) {
                $n = 0;
                foreach ($this->targetInstanceConfigs as $item) {
                    $res['targetInstanceConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetInstanceConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['targetInstanceConfigs'])) {
            if (!empty($map['targetInstanceConfigs'])) {
                $model->targetInstanceConfigs = [];
                $n                            = 0;
                foreach ($map['targetInstanceConfigs'] as $item) {
                    $model->targetInstanceConfigs[$n++] = null !== $item ? \AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponse\data\jobInfo\items\targetInstanceConfigs\targetInstanceConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
