<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportWorkitemActivityResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $gmtEvent;

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
    public $newValue;

    /**
     * @var string
     */
    public $oldValue;

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
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $workitemId;
    protected $_name = [
        'gmtEvent' => 'gmtEvent',
        'id' => 'id',
        'identifier' => 'identifier',
        'newValue' => 'newValue',
        'oldValue' => 'oldValue',
        'organizationId' => 'organizationId',
        'projectId' => 'projectId',
        'source' => 'source',
        'type' => 'type',
        'workitemId' => 'workitemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtEvent) {
            $res['gmtEvent'] = $this->gmtEvent;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->newValue) {
            $res['newValue'] = $this->newValue;
        }

        if (null !== $this->oldValue) {
            $res['oldValue'] = $this->oldValue;
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

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['gmtEvent'])) {
            $model->gmtEvent = $map['gmtEvent'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        if (isset($map['newValue'])) {
            $model->newValue = $map['newValue'];
        }

        if (isset($map['oldValue'])) {
            $model->oldValue = $map['oldValue'];
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

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['workitemId'])) {
            $model->workitemId = $map['workitemId'];
        }

        return $model;
    }
}
