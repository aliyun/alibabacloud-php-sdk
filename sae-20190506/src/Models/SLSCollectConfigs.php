<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class SLSCollectConfigs extends Model
{
    /**
     * @var SLSCollectConfig[]
     */
    public $collectConfigs;
    protected $_name = [
        'collectConfigs' => 'CollectConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectConfigs) {
            $res['CollectConfigs'] = [];
            if (null !== $this->collectConfigs && \is_array($this->collectConfigs)) {
                $n = 0;
                foreach ($this->collectConfigs as $item) {
                    $res['CollectConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SLSCollectConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectConfigs'])) {
            if (!empty($map['CollectConfigs'])) {
                $model->collectConfigs = [];
                $n                     = 0;
                foreach ($map['CollectConfigs'] as $item) {
                    $model->collectConfigs[$n++] = null !== $item ? SLSCollectConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
