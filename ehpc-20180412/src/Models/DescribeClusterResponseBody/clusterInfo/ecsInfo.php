<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\ecsInfo\compute;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\ecsInfo\login;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\ecsInfo\manager;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\ecsInfo\proxyMgr;

class ecsInfo extends Model
{
    /**
     * @var compute
     */
    public $compute;

    /**
     * @var login
     */
    public $login;

    /**
     * @var manager
     */
    public $manager;

    /**
     * @var proxyMgr
     */
    public $proxyMgr;
    protected $_name = [
        'compute' => 'Compute',
        'login' => 'Login',
        'manager' => 'Manager',
        'proxyMgr' => 'ProxyMgr',
    ];

    public function validate()
    {
        if (null !== $this->compute) {
            $this->compute->validate();
        }
        if (null !== $this->login) {
            $this->login->validate();
        }
        if (null !== $this->manager) {
            $this->manager->validate();
        }
        if (null !== $this->proxyMgr) {
            $this->proxyMgr->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compute) {
            $res['Compute'] = null !== $this->compute ? $this->compute->toArray($noStream) : $this->compute;
        }

        if (null !== $this->login) {
            $res['Login'] = null !== $this->login ? $this->login->toArray($noStream) : $this->login;
        }

        if (null !== $this->manager) {
            $res['Manager'] = null !== $this->manager ? $this->manager->toArray($noStream) : $this->manager;
        }

        if (null !== $this->proxyMgr) {
            $res['ProxyMgr'] = null !== $this->proxyMgr ? $this->proxyMgr->toArray($noStream) : $this->proxyMgr;
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
