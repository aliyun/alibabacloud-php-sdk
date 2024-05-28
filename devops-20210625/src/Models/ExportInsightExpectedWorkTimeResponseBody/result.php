<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightExpectedWorkTimeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1714976497000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1714976520000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 26281535
     *
     * @var int
     */
    public $id;

    /**
     * @example bd4ddc7b0ea0ef2ab52699xxxx
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
     * @example 61db9af2148974246be6xxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 6c4687b0179e1d458fedf1xxxx
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 63466a385dc8531eebd7xxxx
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
     * @example 180
     *
     * @var float
     */
    public $value;

    /**
     * @example de7c6fd3bd4b53f4d9e279xxxx
     *
     * @var string
     */
    public $workitemId;
    protected $_name = [
        'gmtCreate'      => 'gmtCreate',
        'gmtModified'    => 'gmtModified',
        'id'             => 'id',
        'identifier'     => 'identifier',
        'isDeleted'      => 'isDeleted',
        'organizationId' => 'organizationId',
        'projectId'      => 'projectId',
        'recorderId'     => 'recorderId',
        'source'         => 'source',
        'type'           => 'type',
        'value'          => 'value',
        'workitemId'     => 'workitemId',
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
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
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
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['workitemId'])) {
            $model->workitemId = $map['workitemId'];
        }

        return $model;
    }
}
