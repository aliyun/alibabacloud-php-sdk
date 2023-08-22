<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\network;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\nodePool;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\securityPolicy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\storagePolicy;
use AlibabaCloud\Tea\Model;

class ModifyAppInstanceGroupAttributeRequest extends Model
{
    /**
     * @example aig-9ciijz60n4xsv****
     *
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
     * @var string
     */
    public $preOpenAppId;

    /**
     * @var string
     */
    public $preOpenMode;

    /**
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @var securityPolicy
     */
    public $securityPolicy;

    /**
     * @example 15
     *
     * @var int
     */
    public $sessionTimeout;

    /**
     * @var storagePolicy
     */
    public $storagePolicy;
    protected $_name = [
        'appInstanceGroupId'   => 'AppInstanceGroupId',
        'appInstanceGroupName' => 'AppInstanceGroupName',
        'network'              => 'Network',
        'nodePool'             => 'NodePool',
        'preOpenAppId'         => 'PreOpenAppId',
        'preOpenMode'          => 'PreOpenMode',
        'productType'          => 'ProductType',
        'securityPolicy'       => 'SecurityPolicy',
        'sessionTimeout'       => 'SessionTimeout',
        'storagePolicy'        => 'StoragePolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceGroupName) {
            $res['AppInstanceGroupName'] = $this->appInstanceGroupName;
        }
        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toMap() : null;
        }
        if (null !== $this->nodePool) {
            $res['NodePool'] = null !== $this->nodePool ? $this->nodePool->toMap() : null;
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
            $res['SecurityPolicy'] = null !== $this->securityPolicy ? $this->securityPolicy->toMap() : null;
        }
        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }
        if (null !== $this->storagePolicy) {
            $res['StoragePolicy'] = null !== $this->storagePolicy ? $this->storagePolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAppInstanceGroupAttributeRequest
     */
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
