<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterInstalledServiceResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterInstalledServiceResponseBody\clusterInstalledServiceList\clusterInstalledService;
use AlibabaCloud\Tea\Model;

class clusterInstalledServiceList extends Model
{
    /**
     * @var clusterInstalledService[]
     */
    public $clusterInstalledService;
    protected $_name = [
        'clusterInstalledService' => 'ClusterInstalledService',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterInstalledService) {
            $res['ClusterInstalledService'] = [];
            if (null !== $this->clusterInstalledService && \is_array($this->clusterInstalledService)) {
                $n = 0;
                foreach ($this->clusterInstalledService as $item) {
                    $res['ClusterInstalledService'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInstalledServiceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterInstalledService'])) {
            if (!empty($map['ClusterInstalledService'])) {
                $model->clusterInstalledService = [];
                $n                              = 0;
                foreach ($map['ClusterInstalledService'] as $item) {
                    $model->clusterInstalledService[$n++] = null !== $item ? clusterInstalledService::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
