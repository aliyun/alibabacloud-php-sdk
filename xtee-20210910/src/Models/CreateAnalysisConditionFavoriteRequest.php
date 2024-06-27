<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class CreateAnalysisConditionFavoriteRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $condition;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $eventBeginTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $eventCodes;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $eventEndTime;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $fieldValue;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $regId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'lang'           => 'Lang',
        'condition'      => 'condition',
        'eventBeginTime' => 'eventBeginTime',
        'eventCodes'     => 'eventCodes',
        'eventEndTime'   => 'eventEndTime',
        'fieldName'      => 'fieldName',
        'fieldValue'     => 'fieldValue',
        'name'           => 'name',
        'regId'          => 'regId',
        'type'           => 'type',
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
        if (null !== $this->eventBeginTime) {
            $res['eventBeginTime'] = $this->eventBeginTime;
        }
        if (null !== $this->eventCodes) {
            $res['eventCodes'] = $this->eventCodes;
        }
        if (null !== $this->eventEndTime) {
            $res['eventEndTime'] = $this->eventEndTime;
        }
        if (null !== $this->fieldName) {
            $res['fieldName'] = $this->fieldName;
        }
        if (null !== $this->fieldValue) {
            $res['fieldValue'] = $this->fieldValue;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAnalysisConditionFavoriteRequest
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
        if (isset($map['eventBeginTime'])) {
            $model->eventBeginTime = $map['eventBeginTime'];
        }
        if (isset($map['eventCodes'])) {
            $model->eventCodes = $map['eventCodes'];
        }
        if (isset($map['eventEndTime'])) {
            $model->eventEndTime = $map['eventEndTime'];
        }
        if (isset($map['fieldName'])) {
            $model->fieldName = $map['fieldName'];
        }
        if (isset($map['fieldValue'])) {
            $model->fieldValue = $map['fieldValue'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
