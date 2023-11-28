<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksResponseBody\result;

use AlibabaCloud\Tea\Model;

class sinkCluster extends Model
{
    /**
     * @example elasticsearch
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The settings configuration.
     *
     * @example index_001
     *
     * @var string
     */
    public $index;

    /**
     * @description The type of the target index.
     *
     * @example {\"doc\":{\"properties\":{\"interval_ms\":{\"type\":\"long\"},....}
     *
     * @var string
     */
    public $mapping;

    /**
     * @description The name of the target index.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $password;

    /**
     * @description The username of the destination cluster.
     *
     * @example cluster_name
     *
     * @var string
     */
    public $routing;

    /**
     * @description Mapping configuration.
     *
     * @example {\n  \"index\": {\n    \"replication\": {\n      \"type\": .....}
     *
     * @var string
     */
    public $settings;

    /**
     * @description The routing field. The primary key field is used by default.
     *
     * @example index_001
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the Virtual Private Cloud to which the cluster belongs. If the cluster access address is a public domain name, you can not specify the private endpoint.
     *
     * @example elastic
     *
     * @var string
     */
    public $username;

    /**
     * @description The access port number of the cluster.
     *
     * @example vpc-2ze55voww95g82gak****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The type of the target cluster.
     *
     * @example es-cn-oew1oxiro000f****-worker
     *
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @description The instance ID of the cluster under the Virtual Private Cloud, or the ID of the SLB instance.
     *
     * @example 9200
     *
     * @var string
     */
    public $vpcInstancePort;
    protected $_name = [
        'dataSourceType'  => 'dataSourceType',
        'index'           => 'index',
        'mapping'         => 'mapping',
        'password'        => 'password',
        'routing'         => 'routing',
        'settings'        => 'settings',
        'type'            => 'type',
        'username'        => 'username',
        'vpcId'           => 'vpcId',
        'vpcInstanceId'   => 'vpcInstanceId',
        'vpcInstancePort' => 'vpcInstancePort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceType) {
            $res['dataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->mapping) {
            $res['mapping'] = $this->mapping;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->routing) {
            $res['routing'] = $this->routing;
        }
        if (null !== $this->settings) {
            $res['settings'] = $this->settings;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcInstanceId) {
            $res['vpcInstanceId'] = $this->vpcInstanceId;
        }
        if (null !== $this->vpcInstancePort) {
            $res['vpcInstancePort'] = $this->vpcInstancePort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSourceType'])) {
            $model->dataSourceType = $map['dataSourceType'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['mapping'])) {
            $model->mapping = $map['mapping'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['routing'])) {
            $model->routing = $map['routing'];
        }
        if (isset($map['settings'])) {
            $model->settings = $map['settings'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }
        if (isset($map['vpcInstanceId'])) {
            $model->vpcInstanceId = $map['vpcInstanceId'];
        }
        if (isset($map['vpcInstancePort'])) {
            $model->vpcInstancePort = $map['vpcInstancePort'];
        }

        return $model;
    }
}
