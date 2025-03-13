<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightSprintResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1711936113000
     *
     * @var int
     */
    public $actualEnd;

    /**
     * @example 1711936113000
     *
     * @var int
     */
    public $actualStart;

    /**
     * @example 1710989643000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1711728000000
     *
     * @var int
     */
    public $gmtEnd;

    /**
     * @example 1711936113000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 1711936113000
     *
     * @var int
     */
    public $gmtStart;

    /**
     * @example 18471761
     *
     * @var int
     */
    public $id;

    /**
     * @example e4895cadc86632f34dfaa7xxxx
     *
     * @var string
     */
    public $identifier;

    /**
     * @example N
     *
     * @var string
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 61db9af2148974246bexxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 385e7e5a4be6791f0a5185xxxx
     *
     * @var string
     */
    public $projectId;

    /**
     * @example projex
     *
     * @var string
     */
    public $source;

    /**
     * @example 50
     *
     * @var int
     */
    public $status;

    /**
     * @example 60.0
     *
     * @var float
     */
    public $workTimeCapacity;
    protected $_name = [
        'actualEnd'        => 'actualEnd',
        'actualStart'      => 'actualStart',
        'gmtCreate'        => 'gmtCreate',
        'gmtEnd'           => 'gmtEnd',
        'gmtModified'      => 'gmtModified',
        'gmtStart'         => 'gmtStart',
        'id'               => 'id',
        'identifier'       => 'identifier',
        'isDeleted'        => 'isDeleted',
        'name'             => 'name',
        'organizationId'   => 'organizationId',
        'projectId'        => 'projectId',
        'source'           => 'source',
        'status'           => 'status',
        'workTimeCapacity' => 'workTimeCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
