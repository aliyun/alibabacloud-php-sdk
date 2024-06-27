<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class CreateCustVariableRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $eventCodes;

    /**
     * @var string
     */
    public $historyValueType;

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
    public $regId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $subject;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $timeType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $twCount;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $velocityFC;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $velocityTW;
    protected $_name = [
        'lang'             => 'Lang',
        'condition'        => 'condition',
        'createType'       => 'createType',
        'description'      => 'description',
        'eventCodes'       => 'eventCodes',
        'historyValueType' => 'historyValueType',
        'object'           => 'object',
        'outputs'          => 'outputs',
        'regId'            => 'regId',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }
        if (null !== $this->createType) {
            $res['createType'] = $this->createType;
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
        if (null !== $this->object) {
            $res['object'] = $this->object;
        }
        if (null !== $this->outputs) {
            $res['outputs'] = $this->outputs;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
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
     * @return CreateCustVariableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }
        if (isset($map['createType'])) {
            $model->createType = $map['createType'];
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
        if (isset($map['object'])) {
            $model->object = $map['object'];
        }
        if (isset($map['outputs'])) {
            $model->outputs = $map['outputs'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
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
