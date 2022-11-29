<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class Template extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $deletionTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $generation;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $name;

    /**
     * @var TemplateSpec
     */
    public $spec;

    /**
     * @var TemplateStatus
     */
    public $status;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'createdTime'  => 'createdTime',
        'deletionTime' => 'deletionTime',
        'description'  => 'description',
        'generation'   => 'generation',
        'kind'         => 'kind',
        'name'         => 'name',
        'spec'         => 'spec',
        'status'       => 'status',
        'uid'          => 'uid',
        'version'      => 'version',
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
        if (null !== $this->deletionTime) {
            $res['deletionTime'] = $this->deletionTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['deletionTime'])) {
            $model->deletionTime = $map['deletionTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['spec'])) {
            $model->spec = TemplateSpec::fromMap($map['spec']);
        }
        if (isset($map['status'])) {
            $model->status = TemplateStatus::fromMap($map['status']);
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
