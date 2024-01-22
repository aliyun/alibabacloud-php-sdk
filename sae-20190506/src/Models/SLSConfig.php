<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\SLSConfig\collectConfigs;
use AlibabaCloud\Tea\Model;

class SLSConfig extends Model
{
    /**
     * @var collectConfigs[]
     */
    public $collectConfigs;
    protected $_name = [
        'collectConfigs' => 'collectConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectConfigs) {
            $res['collectConfigs'] = [];
            if (null !== $this->collectConfigs && \is_array($this->collectConfigs)) {
                $n = 0;
                foreach ($this->collectConfigs as $item) {
                    $res['collectConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SLSConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['collectConfigs'])) {
            if (!empty($map['collectConfigs'])) {
                $model->collectConfigs = [];
                $n                     = 0;
                foreach ($map['collectConfigs'] as $item) {
                    $model->collectConfigs[$n++] = null !== $item ? collectConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
