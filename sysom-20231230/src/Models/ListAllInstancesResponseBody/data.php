<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListAllInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAllInstancesResponseBody\data\attributes;

class data extends Model
{
    /**
     * @var string
     */
    public $agentConfigId;

    /**
     * @var string
     */
    public $agentConfigName;

    /**
     * @var attributes[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $installLevel;

    /**
     * @var string
     */
    public $installType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $kernelVersion;

    /**
     * @var string
     */
    public $manageLevel;

    /**
     * @var string
     */
    public $manageType;

    /**
     * @var string
     */
    public $osArch;

    /**
     * @var int
     */
    public $osHealthScore;

    /**
     * @var string
     */
    public $osName;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'agentConfigId' => 'agentConfigId',
        'agentConfigName' => 'agentConfigName',
        'attributes' => 'attributes',
        'clusterId' => 'clusterId',
        'clusterName' => 'clusterName',
        'imageId' => 'imageId',
        'installLevel' => 'installLevel',
        'installType' => 'installType',
        'instanceId' => 'instanceId',
        'instanceName' => 'instanceName',
        'instanceType' => 'instanceType',
        'kernelVersion' => 'kernelVersion',
        'manageLevel' => 'manageLevel',
        'manageType' => 'manageType',
        'osArch' => 'osArch',
        'osHealthScore' => 'osHealthScore',
        'osName' => 'osName',
        'privateIp' => 'privateIp',
        'publicIp' => 'publicIp',
        'resourceGroupId' => 'resourceGroupId',
        'resourceGroupName' => 'resourceGroupName',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentConfigId) {
            $res['agentConfigId'] = $this->agentConfigId;
        }

        if (null !== $this->agentConfigName) {
            $res['agentConfigName'] = $this->agentConfigName;
        }

        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['attributes'] = [];
                $n1 = 0;
                foreach ($this->attributes as $item1) {
                    $res['attributes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['clusterName'] = $this->clusterName;
        }

        if (null !== $this->imageId) {
            $res['imageId'] = $this->imageId;
        }

        if (null !== $this->installLevel) {
            $res['installLevel'] = $this->installLevel;
        }

        if (null !== $this->installType) {
            $res['installType'] = $this->installType;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->kernelVersion) {
            $res['kernelVersion'] = $this->kernelVersion;
        }

        if (null !== $this->manageLevel) {
            $res['manageLevel'] = $this->manageLevel;
        }

        if (null !== $this->manageType) {
            $res['manageType'] = $this->manageType;
        }

        if (null !== $this->osArch) {
            $res['osArch'] = $this->osArch;
        }

        if (null !== $this->osHealthScore) {
            $res['osHealthScore'] = $this->osHealthScore;
        }

        if (null !== $this->osName) {
            $res['osName'] = $this->osName;
        }

        if (null !== $this->privateIp) {
            $res['privateIp'] = $this->privateIp;
        }

        if (null !== $this->publicIp) {
            $res['publicIp'] = $this->publicIp;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceGroupName) {
            $res['resourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['agentConfigId'])) {
            $model->agentConfigId = $map['agentConfigId'];
        }

        if (isset($map['agentConfigName'])) {
            $model->agentConfigName = $map['agentConfigName'];
        }

        if (isset($map['attributes'])) {
            if (!empty($map['attributes'])) {
                $model->attributes = [];
                $n1 = 0;
                foreach ($map['attributes'] as $item1) {
                    $model->attributes[$n1] = attributes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['clusterName'])) {
            $model->clusterName = $map['clusterName'];
        }

        if (isset($map['imageId'])) {
            $model->imageId = $map['imageId'];
        }

        if (isset($map['installLevel'])) {
            $model->installLevel = $map['installLevel'];
        }

        if (isset($map['installType'])) {
            $model->installType = $map['installType'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['kernelVersion'])) {
            $model->kernelVersion = $map['kernelVersion'];
        }

        if (isset($map['manageLevel'])) {
            $model->manageLevel = $map['manageLevel'];
        }

        if (isset($map['manageType'])) {
            $model->manageType = $map['manageType'];
        }

        if (isset($map['osArch'])) {
            $model->osArch = $map['osArch'];
        }

        if (isset($map['osHealthScore'])) {
            $model->osHealthScore = $map['osHealthScore'];
        }

        if (isset($map['osName'])) {
            $model->osName = $map['osName'];
        }

        if (isset($map['privateIp'])) {
            $model->privateIp = $map['privateIp'];
        }

        if (isset($map['publicIp'])) {
            $model->publicIp = $map['publicIp'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['resourceGroupName'])) {
            $model->resourceGroupName = $map['resourceGroupName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
