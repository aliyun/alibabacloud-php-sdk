<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\network;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\nodePool;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\securityPolicy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\storagePolicy;

class ModifyAppInstanceGroupAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceGroupName;

    /**
     * @var network
     */
    public $network;

    /**
     * @var nodePool
     */
    public $nodePool;

    /**
     * @var bool
     */
    public $perSessionPerApp;

    /**
     * @var string
     */
    public $preOpenAppId;

    /**
     * @var string
     */
    public $preOpenMode;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var securityPolicy
     */
    public $securityPolicy;

    /**
     * @var int
     */
    public $sessionTimeout;

    /**
     * @var storagePolicy
     */
    public $storagePolicy;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceGroupName' => 'AppInstanceGroupName',
        'network' => 'Network',
        'nodePool' => 'NodePool',
        'perSessionPerApp' => 'PerSessionPerApp',
        'preOpenAppId' => 'PreOpenAppId',
        'preOpenMode' => 'PreOpenMode',
        'productType' => 'ProductType',
        'securityPolicy' => 'SecurityPolicy',
        'sessionTimeout' => 'SessionTimeout',
        'storagePolicy' => 'StoragePolicy',
    ];

    public function validate()
    {
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (null !== $this->nodePool) {
            $this->nodePool->validate();
        }
        if (null !== $this->securityPolicy) {
            $this->securityPolicy->validate();
        }
        if (null !== $this->storagePolicy) {
            $this->storagePolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceGroupName) {
            $res['AppInstanceGroupName'] = $this->appInstanceGroupName;
        }

        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->nodePool) {
            $res['NodePool'] = null !== $this->nodePool ? $this->nodePool->toArray($noStream) : $this->nodePool;
        }

        if (null !== $this->perSessionPerApp) {
            $res['PerSessionPerApp'] = $this->perSessionPerApp;
        }

        if (null !== $this->preOpenAppId) {
            $res['PreOpenAppId'] = $this->preOpenAppId;
        }

        if (null !== $this->preOpenMode) {
            $res['PreOpenMode'] = $this->preOpenMode;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->securityPolicy) {
            $res['SecurityPolicy'] = null !== $this->securityPolicy ? $this->securityPolicy->toArray($noStream) : $this->securityPolicy;
        }

        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }

        if (null !== $this->storagePolicy) {
            $res['StoragePolicy'] = null !== $this->storagePolicy ? $this->storagePolicy->toArray($noStream) : $this->storagePolicy;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceGroupName'])) {
            $model->appInstanceGroupName = $map['AppInstanceGroupName'];
        }

        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        if (isset($map['NodePool'])) {
            $model->nodePool = nodePool::fromMap($map['NodePool']);
        }

        if (isset($map['PerSessionPerApp'])) {
            $model->perSessionPerApp = $map['PerSessionPerApp'];
        }

        if (isset($map['PreOpenAppId'])) {
            $model->preOpenAppId = $map['PreOpenAppId'];
        }

        if (isset($map['PreOpenMode'])) {
            $model->preOpenMode = $map['PreOpenMode'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['SecurityPolicy'])) {
            $model->securityPolicy = securityPolicy::fromMap($map['SecurityPolicy']);
        }

        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }

        if (isset($map['StoragePolicy'])) {
            $model->storagePolicy = storagePolicy::fromMap($map['StoragePolicy']);
        }

        return $model;
    }
}
