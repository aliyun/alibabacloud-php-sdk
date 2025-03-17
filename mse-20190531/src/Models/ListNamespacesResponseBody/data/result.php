<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListNamespacesResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $appCount;

    /**
     * @example 2024-09-02T09:49:48.000+0000
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $describe;

    /**
     * @example 6
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @example myNamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example 2024-09-02T09:49:48.000+0000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @example 178*******
     *
     * @var string
     */
    public $userId;

    /**
     * @example 1
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'appCount' => 'AppCount',
        'createTime' => 'CreateTime',
        'describe' => 'Describe',
        'instanceCount' => 'InstanceCount',
        'namespace' => 'Namespace',
        'region' => 'Region',
        'updateTime' => 'UpdateTime',
        'userId' => 'UserId',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCount) {
            $res['AppCount'] = $this->appCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCount'])) {
            $model->appCount = $map['AppCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
