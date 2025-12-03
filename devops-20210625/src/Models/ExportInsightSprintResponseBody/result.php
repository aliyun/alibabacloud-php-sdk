<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightSprintResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $actualEnd;

    /**
     * @var int
     */
    public $actualStart;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtEnd;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $gmtStart;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $status;

    /**
     * @var float
     */
    public $workTimeCapacity;
    protected $_name = [
        'actualEnd' => 'actualEnd',
        'actualStart' => 'actualStart',
        'gmtCreate' => 'gmtCreate',
        'gmtEnd' => 'gmtEnd',
        'gmtModified' => 'gmtModified',
        'gmtStart' => 'gmtStart',
        'id' => 'id',
        'identifier' => 'identifier',
        'isDeleted' => 'isDeleted',
        'name' => 'name',
        'organizationId' => 'organizationId',
        'projectId' => 'projectId',
        'source' => 'source',
        'status' => 'status',
        'workTimeCapacity' => 'workTimeCapacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualEnd) {
            $res['actualEnd'] = $this->actualEnd;
        }

        if (null !== $this->actualStart) {
            $res['actualStart'] = $this->actualStart;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtEnd) {
            $res['gmtEnd'] = $this->gmtEnd;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->gmtStart) {
            $res['gmtStart'] = $this->gmtStart;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->isDeleted) {
            $res['isDeleted'] = $this->isDeleted;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->workTimeCapacity) {
            $res['workTimeCapacity'] = $this->workTimeCapacity;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actualEnd'])) {
            $model->actualEnd = $map['actualEnd'];
        }

        if (isset($map['actualStart'])) {
            $model->actualStart = $map['actualStart'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtEnd'])) {
            $model->gmtEnd = $map['gmtEnd'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['gmtStart'])) {
            $model->gmtStart = $map['gmtStart'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        if (isset($map['isDeleted'])) {
            $model->isDeleted = $map['isDeleted'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['workTimeCapacity'])) {
            $model->workTimeCapacity = $map['workTimeCapacity'];
        }

        return $model;
    }
}
