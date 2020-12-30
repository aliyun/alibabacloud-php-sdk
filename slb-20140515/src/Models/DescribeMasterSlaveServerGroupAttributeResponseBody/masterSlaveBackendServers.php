<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupAttributeResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupAttributeResponseBody\masterSlaveBackendServers\masterSlaveBackendServer;
use AlibabaCloud\Tea\Model;

class masterSlaveBackendServers extends Model
{
    /**
     * @var masterSlaveBackendServer[]
     */
    public $masterSlaveBackendServer;
    protected $_name = [
        'masterSlaveBackendServer' => 'MasterSlaveBackendServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterSlaveBackendServer) {
            $res['MasterSlaveBackendServer'] = [];
            if (null !== $this->masterSlaveBackendServer && \is_array($this->masterSlaveBackendServer)) {
                $n = 0;
                foreach ($this->masterSlaveBackendServer as $item) {
                    $res['MasterSlaveBackendServer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return masterSlaveBackendServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterSlaveBackendServer'])) {
            if (!empty($map['MasterSlaveBackendServer'])) {
                $model->masterSlaveBackendServer = [];
                $n                               = 0;
                foreach ($map['MasterSlaveBackendServer'] as $item) {
                    $model->masterSlaveBackendServer[$n++] = null !== $item ? masterSlaveBackendServer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
