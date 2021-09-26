<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectClusterSettingResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectClusterSettingResponseBody\clusterSettings\clusterSetting;
use AlibabaCloud\Tea\Model;

class clusterSettings extends Model
{
    /**
     * @var clusterSetting[]
     */
    public $clusterSetting;
    protected $_name = [
        'clusterSetting' => 'ClusterSetting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterSetting) {
            $res['ClusterSetting'] = [];
            if (null !== $this->clusterSetting && \is_array($this->clusterSetting)) {
                $n = 0;
                foreach ($this->clusterSetting as $item) {
                    $res['ClusterSetting'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterSetting'])) {
            if (!empty($map['ClusterSetting'])) {
                $model->clusterSetting = [];
                $n                     = 0;
                foreach ($map['ClusterSetting'] as $item) {
                    $model->clusterSetting[$n++] = null !== $item ? clusterSetting::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
