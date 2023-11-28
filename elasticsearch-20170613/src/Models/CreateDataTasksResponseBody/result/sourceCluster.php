<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksResponseBody\result;

use AlibabaCloud\Tea\Model;

class sourceCluster extends Model
{
    /**
     * @description The information about the target cluster.
     *
     * @example elasticsearch
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The username of the source cluster.
     *
     * @example http://10.20.xx.xx:9200
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The type of the specified index.
     *
     * @example index_001
     *
     * @var string
     */
    public $index;

    /**
     * @description Specifies the indexes to be migrated.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $password;

    /**
     * @description The public domain name of the cluster.
     *
     * @example index_001
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the Virtual Private Cloud where the source cluster resides. If the cluster access address is a public domain name, you can not specify the private endpoint.
     *
     * @example elastic
     *
     * @var string
     */
    public $username;

    /**
     * @description The instance ID of the cluster under the Virtual Private Cloud, or the ID of the SLB instance.
     *
     * @example vpc-2ze55voww95g82gak****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The access port number of the source cluster.
     *
     * @example es-cn-oew1oxiro000f****-worker
     *
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @description The type of the source cluster. Default value: Elasticsearch.
     *
     * @example 9200
     *
     * @var int
     */
    public $vpcInstancePort;
    protected $_name = [
        'dataSourceType'  => 'dataSourceType',
        'endpoint'        => 'endpoint',
        'index'           => 'index',
        'password'        => 'password',
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
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
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
     * @return sourceCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSourceType'])) {
            $model->dataSourceType = $map['dataSourceType'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
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
