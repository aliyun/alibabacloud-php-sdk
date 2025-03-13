<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightWorkitemVersionResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1704251228000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1704251228000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 1704902400000
     *
     * @var int
     */
    public $gmtPublish;

    /**
     * @example 1704297600000
     *
     * @var int
     */
    public $gmtStart;

    /**
     * @example 648131
     *
     * @var int
     */
    public $id;

    /**
     * @example 7ba6e8261b973c976df76b7de1
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
     * @example 0
     *
     * @var int
     */
    public $lockStatus;

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
     * @example projex
     *
     * @var string
     */
    public $source;

    /**
     * @example 100
     *
     * @var int
     */
    public $status;

    /**
     * @example 7eee44ec7f699d4e6980faxxxx
     *
     * @var string
     */
    public $targetId;

    /**
     * @example Project
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'gmtCreate'      => 'gmtCreate',
        'gmtModified'    => 'gmtModified',
        'gmtPublish'     => 'gmtPublish',
        'gmtStart'       => 'gmtStart',
        'id'             => 'id',
        'identifier'     => 'identifier',
        'isDeleted'      => 'isDeleted',
        'lockStatus'     => 'lockStatus',
        'name'           => 'name',
        'organizationId' => 'organizationId',
        'source'         => 'source',
        'status'         => 'status',
        'targetId'       => 'targetId',
        'targetType'     => 'targetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtPublish) {
            $res['gmtPublish'] = $this->gmtPublish;
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
        if (null !== $this->lockStatus) {
            $res['lockStatus'] = $this->lockStatus;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->targetId) {
            $res['targetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
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
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['gmtPublish'])) {
            $model->gmtPublish = $map['gmtPublish'];
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
        if (isset($map['lockStatus'])) {
            $model->lockStatus = $map['lockStatus'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['targetId'])) {
            $model->targetId = $map['targetId'];
        }
        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
