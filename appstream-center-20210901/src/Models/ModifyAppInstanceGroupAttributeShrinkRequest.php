<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ModifyAppInstanceGroupAttributeShrinkRequest extends Model
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
     * @var string
     */
    public $networkShrink;

    /**
     * @var string
     */
    public $nodePoolShrink;

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
     * @var string
     */
    public $securityPolicyShrink;

    /**
     * @var int
     */
    public $sessionTimeout;

    /**
     * @var string
     */
    public $storagePolicyShrink;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceGroupName' => 'AppInstanceGroupName',
        'networkShrink' => 'Network',
        'nodePoolShrink' => 'NodePool',
        'perSessionPerApp' => 'PerSessionPerApp',
        'preOpenAppId' => 'PreOpenAppId',
        'preOpenMode' => 'PreOpenMode',
        'productType' => 'ProductType',
        'securityPolicyShrink' => 'SecurityPolicy',
        'sessionTimeout' => 'SessionTimeout',
        'storagePolicyShrink' => 'StoragePolicy',
    ];

    public function validate()
    {
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

        if (null !== $this->networkShrink) {
            $res['Network'] = $this->networkShrink;
        }

        if (null !== $this->nodePoolShrink) {
            $res['NodePool'] = $this->nodePoolShrink;
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

        if (null !== $this->securityPolicyShrink) {
            $res['SecurityPolicy'] = $this->securityPolicyShrink;
        }

        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }

        if (null !== $this->storagePolicyShrink) {
            $res['StoragePolicy'] = $this->storagePolicyShrink;
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
            $model->networkShrink = $map['Network'];
        }

        if (isset($map['NodePool'])) {
            $model->nodePoolShrink = $map['NodePool'];
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
            $model->securityPolicyShrink = $map['SecurityPolicy'];
        }

        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }

        if (isset($map['StoragePolicy'])) {
            $model->storagePolicyShrink = $map['StoragePolicy'];
        }

        return $model;
    }
}
