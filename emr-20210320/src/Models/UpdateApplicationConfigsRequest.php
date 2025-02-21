<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class UpdateApplicationConfigsRequest extends Model
{
    /**
     * @var UpdateApplicationConfig[]
     */
    public $applicationConfigs;
    /**
     * @var string
     */
    public $applicationName;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $configAction;
    /**
     * @var string
     */
    public $configScope;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $nodeGroupId;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var bool
     */
    public $refreshConfig;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationConfigs' => 'ApplicationConfigs',
        'applicationName'    => 'ApplicationName',
        'clusterId'          => 'ClusterId',
        'configAction'       => 'ConfigAction',
        'configScope'        => 'ConfigScope',
        'description'        => 'Description',
        'nodeGroupId'        => 'NodeGroupId',
        'nodeId'             => 'NodeId',
        'refreshConfig'      => 'RefreshConfig',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationConfigs)) {
            Model::validateArray($this->applicationConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationConfigs) {
            if (\is_array($this->applicationConfigs)) {
                $res['ApplicationConfigs'] = [];
                $n1                        = 0;
                foreach ($this->applicationConfigs as $item1) {
                    $res['ApplicationConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->configAction) {
            $res['ConfigAction'] = $this->configAction;
        }

        if (null !== $this->configScope) {
            $res['ConfigScope'] = $this->configScope;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->refreshConfig) {
            $res['RefreshConfig'] = $this->refreshConfig;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ApplicationConfigs'])) {
            if (!empty($map['ApplicationConfigs'])) {
                $model->applicationConfigs = [];
                $n1                        = 0;
                foreach ($map['ApplicationConfigs'] as $item1) {
                    $model->applicationConfigs[$n1++] = UpdateApplicationConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ConfigAction'])) {
            $model->configAction = $map['ConfigAction'];
        }

        if (isset($map['ConfigScope'])) {
            $model->configScope = $map['ConfigScope'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['RefreshConfig'])) {
            $model->refreshConfig = $map['RefreshConfig'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
