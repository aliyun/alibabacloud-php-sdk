<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class PrometheusManagedInstance extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $prometheusInstanceId;

    /**
     * @var string
     */
    public $prometheusInstanceName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createTime' => 'createTime',
        'instanceType' => 'instanceType',
        'prometheusInstanceId' => 'prometheusInstanceId',
        'prometheusInstanceName' => 'prometheusInstanceName',
        'regionId' => 'regionId',
        'status' => 'status',
        'workspace' => 'workspace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->prometheusInstanceId) {
            $res['prometheusInstanceId'] = $this->prometheusInstanceId;
        }
        if (null !== $this->prometheusInstanceName) {
            $res['prometheusInstanceName'] = $this->prometheusInstanceName;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PrometheusManagedInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['prometheusInstanceId'])) {
            $model->prometheusInstanceId = $map['prometheusInstanceId'];
        }
        if (isset($map['prometheusInstanceName'])) {
            $model->prometheusInstanceName = $map['prometheusInstanceName'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
