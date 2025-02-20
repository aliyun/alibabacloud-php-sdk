<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightWorkTimeResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var float
     */
    public $actualValue;
    /**
     * @var string
     */
    public $description;
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
    public $organizationId;
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var string
     */
    public $recorderId;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $uuid;
    /**
     * @var int
     */
    public $value;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
