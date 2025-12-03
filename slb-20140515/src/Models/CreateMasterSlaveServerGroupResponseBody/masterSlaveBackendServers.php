<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\CreateMasterSlaveServerGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\CreateMasterSlaveServerGroupResponseBody\masterSlaveBackendServers\masterSlaveBackendServer;

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
        if (\is_array($this->masterSlaveBackendServer)) {
            Model::validateArray($this->masterSlaveBackendServer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->masterSlaveBackendServer) {
            if (\is_array($this->masterSlaveBackendServer)) {
                $res['MasterSlaveBackendServer'] = [];
                $n1 = 0;
                foreach ($this->masterSlaveBackendServer as $item1) {
                    $res['MasterSlaveBackendServer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterSlaveBackendServer'])) {
            if (!empty($map['MasterSlaveBackendServer'])) {
                $model->masterSlaveBackendServer = [];
                $n1 = 0;
                foreach ($map['MasterSlaveBackendServer'] as $item1) {
                    $model->masterSlaveBackendServer[$n1] = masterSlaveBackendServer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
