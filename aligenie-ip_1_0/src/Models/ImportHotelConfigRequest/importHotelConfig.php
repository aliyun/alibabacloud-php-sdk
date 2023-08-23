<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportHotelConfigRequest;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportHotelConfigRequest\importHotelConfig\rcuCustomScenes;
use AlibabaCloud\Tea\Model;

class importHotelConfig extends Model
{
    /**
     * @var rcuCustomScenes[]
     */
    public $rcuCustomScenes;
    protected $_name = [
        'rcuCustomScenes' => 'RcuCustomScenes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rcuCustomScenes) {
            $res['RcuCustomScenes'] = [];
            if (null !== $this->rcuCustomScenes && \is_array($this->rcuCustomScenes)) {
                $n = 0;
                foreach ($this->rcuCustomScenes as $item) {
                    $res['RcuCustomScenes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return importHotelConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RcuCustomScenes'])) {
            if (!empty($map['RcuCustomScenes'])) {
                $model->rcuCustomScenes = [];
                $n                      = 0;
                foreach ($map['RcuCustomScenes'] as $item) {
                    $model->rcuCustomScenes[$n++] = null !== $item ? rcuCustomScenes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
