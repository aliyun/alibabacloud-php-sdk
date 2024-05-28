<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportWorkitemActivityResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1714961337000
     *
     * @var int
     */
    public $gmtEvent;

    /**
     * @example 4406380356
     *
     * @var int
     */
    public $id;

    /**
     * @example 254662353
     *
     * @var string
     */
    public $identifier;

    /**
     * @example 1
     *
     * @var string
     */
    public $newValue;

    /**
     * @example 2
     *
     * @var string
     */
    public $oldValue;

    /**
     * @example 61db9af2148974246bexxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 2a62349afcbef7f23d8f31xxxx
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
     * @example workitem.update.priority
     *
     * @var string
     */
    public $type;

    /**
     * @example ec69eae498acce08ff7260xxxx
     *
     * @var string
     */
    public $workitemId;
    protected $_name = [
        'gmtEvent'       => 'gmtEvent',
        'id'             => 'id',
        'identifier'     => 'identifier',
        'newValue'       => 'newValue',
        'oldValue'       => 'oldValue',
        'organizationId' => 'organizationId',
        'projectId'      => 'projectId',
        'source'         => 'source',
        'type'           => 'type',
        'workitemId'     => 'workitemId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
