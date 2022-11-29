<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class EnvironmentRevision extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var int
     */
    public $environmentGeneration;

    /**
     * @var string
     */
    public $environmentName;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var EnvironmentSpec
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
        'createdTime'           => 'createdTime',
        'environmentGeneration' => 'environmentGeneration',
        'environmentName'       => 'environmentName',
        'kind'                  => 'kind',
        'spec'                  => 'spec',
        'status'                => 'status',
        'uid'                   => 'uid',
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
        if (null !== $this->environmentGeneration) {
            $res['environmentGeneration'] = $this->environmentGeneration;
        }
        if (null !== $this->environmentName) {
            $res['environmentName'] = $this->environmentName;
        }
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
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
     * @return EnvironmentRevision
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['environmentGeneration'])) {
            $model->environmentGeneration = $map['environmentGeneration'];
        }
        if (isset($map['environmentName'])) {
            $model->environmentName = $map['environmentName'];
        }
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }
        if (isset($map['spec'])) {
            $model->spec = EnvironmentSpec::fromMap($map['spec']);
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
