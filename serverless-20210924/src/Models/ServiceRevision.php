<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class ServiceRevision extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var int
     */
    public $serviceGeneration;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var ServiceSpec
     */
    public $spec;

    /**
     * @var EnvironmentStatus
     */
    public $status;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'createdTime'       => 'createdTime',
        'kind'              => 'kind',
        'serviceGeneration' => 'serviceGeneration',
        'serviceName'       => 'serviceName',
        'spec'              => 'spec',
        'status'            => 'status',
        'uid'               => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }
        if (null !== $this->serviceGeneration) {
            $res['serviceGeneration'] = $this->serviceGeneration;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->spec) {
            $res['spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ServiceRevision
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }
        if (isset($map['serviceGeneration'])) {
            $model->serviceGeneration = $map['serviceGeneration'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['spec'])) {
            $model->spec = ServiceSpec::fromMap($map['spec']);
        }
        if (isset($map['status'])) {
            $model->status = EnvironmentStatus::fromMap($map['status']);
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
