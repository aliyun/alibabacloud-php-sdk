<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightWorkTimeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 120
     *
     * @var float
     */
    public $actualValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 1714978610000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1715011199999
     *
     * @var int
     */
    public $gmtEnd;

    /**
     * @example 1714978610000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 1714924800000
     *
     * @var int
     */
    public $gmtStart;

    /**
     * @example 49506082
     *
     * @var int
     */
    public $id;

    /**
     * @example da70ce5824231ca3c04ef808e0
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
     * @example 61db9af2148974246bexxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 09670872890eb1a0bb998exxxx
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 65659358c319d2a0f912xxxx
     *
     * @var string
     */
    public $recorderId;

    /**
     * @example projex
     *
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $type;

    /**
     * @example 000000000cd82d3df50d5e5a5c094094fd7b4461
     *
     * @var string
     */
    public $uuid;

    /**
     * @example 120
     *
     * @var int
     */
    public $value;

    /**
     * @example 17bc1cf9a037a15fc9ce76xxxx
     *
     * @var string
     */
    public $workitemId;
    protected $_name = [
        'actualValue'    => 'actualValue',
        'description'    => 'description',
        'gmtCreate'      => 'gmtCreate',
        'gmtEnd'         => 'gmtEnd',
        'gmtModified'    => 'gmtModified',
        'gmtStart'       => 'gmtStart',
        'id'             => 'id',
        'identifier'     => 'identifier',
        'isDeleted'      => 'isDeleted',
        'organizationId' => 'organizationId',
        'projectId'      => 'projectId',
        'recorderId'     => 'recorderId',
        'source'         => 'source',
        'type'           => 'type',
        'uuid'           => 'uuid',
        'value'          => 'value',
        'workitemId'     => 'workitemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualValue) {
            $res['actualValue'] = $this->actualValue;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->recorderId) {
            $res['recorderId'] = $this->recorderId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->workitemId) {
            $res['workitemId'] = $this->workitemId;
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
        if (isset($map['actualValue'])) {
            $model->actualValue = $map['actualValue'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
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
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['recorderId'])) {
            $model->recorderId = $map['recorderId'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['workitemId'])) {
            $model->workitemId = $map['workitemId'];
        }

        return $model;
    }
}
