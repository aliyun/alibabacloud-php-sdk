<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ApplicationConfig extends Model
{
    /**
     * @description 应用名称。从EMR控制台集群创建页面可查看到指定发行版的应用名称列表。
     *
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description 应用配置文件名。
     *
     * @example hdfs-site.xml
     *
     * @var string
     */
    public $configFileName;

    /**
     * @description 配置项键。
     *
     * @example dfs.namenode.checkpoint.period
     *
     * @var string
     */
    public $configItemKey;

    /**
     * @description 配置项值。
     *
     * @example 3600s
     *
     * @var string
     */
    public $configItemValue;

    /**
     * @description 配置范围。取值范围：
     * 默认值：CLUSTER。
     * @example NODE_GROUP
     *
     * @var string
     */
    public $configScope;

    /**
     * @description 节点组ID。ConfigScope取值NODE_GROUP时，该参数生效。NodeGroupId参数优先级高于NodeGroupName。
     *
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description 节点组名称。ConfigScope取值NODE_GROUP时，且参数NodeGroupId为空时生效，该参数生效。
     *
     * @example core-1
     *
     * @var string
     */
    public $nodeGroupName;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'configFileName'  => 'ConfigFileName',
        'configItemKey'   => 'ConfigItemKey',
        'configItemValue' => 'ConfigItemValue',
        'configScope'     => 'ConfigScope',
        'nodeGroupId'     => 'NodeGroupId',
        'nodeGroupName'   => 'NodeGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->configFileName) {
            $res['ConfigFileName'] = $this->configFileName;
        }
        if (null !== $this->configItemKey) {
            $res['ConfigItemKey'] = $this->configItemKey;
        }
        if (null !== $this->configItemValue) {
            $res['ConfigItemValue'] = $this->configItemValue;
        }
        if (null !== $this->configScope) {
            $res['ConfigScope'] = $this->configScope;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplicationConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ConfigFileName'])) {
            $model->configFileName = $map['ConfigFileName'];
        }
        if (isset($map['ConfigItemKey'])) {
            $model->configItemKey = $map['ConfigItemKey'];
        }
        if (isset($map['ConfigItemValue'])) {
            $model->configItemValue = $map['ConfigItemValue'];
        }
        if (isset($map['ConfigScope'])) {
            $model->configScope = $map['ConfigScope'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }

        return $model;
    }
}
