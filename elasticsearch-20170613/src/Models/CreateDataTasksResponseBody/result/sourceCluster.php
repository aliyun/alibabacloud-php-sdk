<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksResponseBody\result;

use AlibabaCloud\Tea\Model;

class sourceCluster extends Model
{
    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @var int
     */
    public $vpcInstancePort;

    /**
     * @var string
     */
    public $dataSourceType;
    protected $_name = [
        'password'        => 'password',
        'index'           => 'index',
        'type'            => 'type',
        'endpoint'        => 'endpoint',
        'username'        => 'username',
        'vpcId'           => 'vpcId',
        'vpcInstanceId'   => 'vpcInstanceId',
        'vpcInstancePort' => 'vpcInstancePort',
        'dataSourceType'  => 'dataSourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
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
        if (null !== $this->dataSourceType) {
            $res['dataSourceType'] = $this->dataSourceType;
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
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
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
        if (isset($map['dataSourceType'])) {
            $model->dataSourceType = $map['dataSourceType'];
        }

        return $model;
    }
}
