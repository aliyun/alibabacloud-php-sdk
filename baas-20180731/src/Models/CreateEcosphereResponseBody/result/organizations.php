<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\CreateEcosphereResponseBody\result;

use AlibabaCloud\Tea\Model;

class organizations extends Model
{
    /**
     * @example Pending
     *
     * @var string
     */
    public $clusterState;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example string
     *
     * @var string
     */
    public $description;

    /**
     * @example string
     *
     * @var string
     */
    public $domain;

    /**
     * @example string
     *
     * @var string
     */
    public $name;

    /**
     * @example Pending
     *
     * @var string
     */
    public $serviceState;
    protected $_name = [
        'clusterState' => 'ClusterState',
        'code'         => 'Code',
        'createTime'   => 'CreateTime',
        'description'  => 'Description',
        'domain'       => 'Domain',
        'name'         => 'Name',
        'serviceState' => 'ServiceState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterState) {
            $res['ClusterState'] = $this->clusterState;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->serviceState) {
            $res['ServiceState'] = $this->serviceState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return organizations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterState'])) {
            $model->clusterState = $map['ClusterState'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServiceState'])) {
            $model->serviceState = $map['ServiceState'];
        }

        return $model;
    }
}
