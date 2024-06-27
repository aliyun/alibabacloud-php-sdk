<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeCustVariableDetailResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var int
     */
    public $dataVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventCodes;

    /**
     * @var string
     */
    public $historyValueType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $timeType;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $twCount;

    /**
     * @var string
     */
    public $velocityFC;

    /**
     * @var string
     */
    public $velocityTW;
    protected $_name = [
        'condition'        => 'condition',
        'dataVersion'      => 'dataVersion',
        'description'      => 'description',
        'eventCodes'       => 'eventCodes',
        'historyValueType' => 'historyValueType',
        'id'               => 'id',
        'object'           => 'object',
        'outputs'          => 'outputs',
        'subject'          => 'subject',
        'timeType'         => 'timeType',
        'title'            => 'title',
        'twCount'          => 'twCount',
        'velocityFC'       => 'velocityFC',
        'velocityTW'       => 'velocityTW',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }
        if (null !== $this->dataVersion) {
            $res['dataVersion'] = $this->dataVersion;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->eventCodes) {
            $res['eventCodes'] = $this->eventCodes;
        }
        if (null !== $this->historyValueType) {
            $res['historyValueType'] = $this->historyValueType;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->object) {
            $res['object'] = $this->object;
        }
        if (null !== $this->outputs) {
            $res['outputs'] = $this->outputs;
        }
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }
        if (null !== $this->timeType) {
            $res['timeType'] = $this->timeType;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->twCount) {
            $res['twCount'] = $this->twCount;
        }
        if (null !== $this->velocityFC) {
            $res['velocityFC'] = $this->velocityFC;
        }
        if (null !== $this->velocityTW) {
            $res['velocityTW'] = $this->velocityTW;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }
        if (isset($map['dataVersion'])) {
            $model->dataVersion = $map['dataVersion'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['eventCodes'])) {
            $model->eventCodes = $map['eventCodes'];
        }
        if (isset($map['historyValueType'])) {
            $model->historyValueType = $map['historyValueType'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['object'])) {
            $model->object = $map['object'];
        }
        if (isset($map['outputs'])) {
            $model->outputs = $map['outputs'];
        }
        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }
        if (isset($map['timeType'])) {
            $model->timeType = $map['timeType'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['twCount'])) {
            $model->twCount = $map['twCount'];
        }
        if (isset($map['velocityFC'])) {
            $model->velocityFC = $map['velocityFC'];
        }
        if (isset($map['velocityTW'])) {
            $model->velocityTW = $map['velocityTW'];
        }

        return $model;
    }
}
