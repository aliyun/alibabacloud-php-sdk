<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksResponseBody\result;

use AlibabaCloud\Tea\Model;

class sinkCluster extends Model
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
    public $settings;

    /**
     * @var string
     */
    public $mapping;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $routing;

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
    public $vpcInstancePort;

    /**
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @var string
     */
    public $dataSourceType;
    protected $_name = [
        'password'        => 'password',
        'index'           => 'index',
        'settings'        => 'settings',
        'mapping'         => 'mapping',
        'type'            => 'type',
        'routing'         => 'routing',
        'username'        => 'username',
        'vpcId'           => 'vpcId',
        'vpcInstancePort' => 'vpcInstancePort',
        'vpcInstanceId'   => 'vpcInstanceId',
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
        if (null !== $this->settings) {
            $res['settings'] = $this->settings;
        }
        if (null !== $this->mapping) {
            $res['mapping'] = $this->mapping;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->routing) {
            $res['routing'] = $this->routing;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcInstancePort) {
            $res['vpcInstancePort'] = $this->vpcInstancePort;
        }
        if (null !== $this->vpcInstanceId) {
            $res['vpcInstanceId'] = $this->vpcInstanceId;
        }
        if (null !== $this->dataSourceType) {
            $res['dataSourceType'] = $this->dataSourceType;
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
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['settings'])) {
            $model->settings = $map['settings'];
        }
        if (isset($map['mapping'])) {
            $model->mapping = $map['mapping'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['routing'])) {
            $model->routing = $map['routing'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }
        if (isset($map['vpcInstancePort'])) {
            $model->vpcInstancePort = $map['vpcInstancePort'];
        }
        if (isset($map['vpcInstanceId'])) {
            $model->vpcInstanceId = $map['vpcInstanceId'];
        }
        if (isset($map['dataSourceType'])) {
            $model->dataSourceType = $map['dataSourceType'];
        }

        return $model;
    }
}
