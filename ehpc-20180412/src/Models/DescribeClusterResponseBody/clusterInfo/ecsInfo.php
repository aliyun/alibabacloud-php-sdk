<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\ecsInfo\compute;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\ecsInfo\login;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\ecsInfo\manager;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\ecsInfo\proxyMgr;
use AlibabaCloud\Tea\Model;

class ecsInfo extends Model
{
    /**
     * @description The list of compute nodes.
     *
     * @var compute
     */
    public $compute;

    /**
     * @description The list of logon nodes.
     *
     * @var login
     */
    public $login;

    /**
     * @description The list of management nodes.
     *
     * @var manager
     */
    public $manager;

    /**
     * @description The list of proxy nodes on the cloud.
     *
     * This parameter is returned only when the cluster is deployed across hybrid environments and the hybrid-cloud proxy mode is enabled for the cluster.
     * @var proxyMgr
     */
    public $proxyMgr;
    protected $_name = [
        'compute'  => 'Compute',
        'login'    => 'Login',
        'manager'  => 'Manager',
        'proxyMgr' => 'ProxyMgr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compute) {
            $res['Compute'] = null !== $this->compute ? $this->compute->toMap() : null;
        }
        if (null !== $this->login) {
            $res['Login'] = null !== $this->login ? $this->login->toMap() : null;
        }
        if (null !== $this->manager) {
            $res['Manager'] = null !== $this->manager ? $this->manager->toMap() : null;
        }
        if (null !== $this->proxyMgr) {
            $res['ProxyMgr'] = null !== $this->proxyMgr ? $this->proxyMgr->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Compute'])) {
            $model->compute = compute::fromMap($map['Compute']);
        }
        if (isset($map['Login'])) {
            $model->login = login::fromMap($map['Login']);
        }
        if (isset($map['Manager'])) {
            $model->manager = manager::fromMap($map['Manager']);
        }
        if (isset($map['ProxyMgr'])) {
            $model->proxyMgr = proxyMgr::fromMap($map['ProxyMgr']);
        }

        return $model;
    }
}
