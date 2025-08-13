<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class CreateAnalysisExportTaskRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $columns;

    /**
     * @var string
     */
    public $conditions;

    /**
     * @var int
     */
    public $eventBeginTime;

    /**
     * @var string
     */
    public $eventCodes;

    /**
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
     * @var string
     */
    public $fileFormat;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'lang' => 'Lang',
        'columns' => 'columns',
        'conditions' => 'conditions',
        'eventBeginTime' => 'eventBeginTime',
        'eventCodes' => 'eventCodes',
        'eventEndTime' => 'eventEndTime',
        'fieldName' => 'fieldName',
        'fieldValue' => 'fieldValue',
        'fileFormat' => 'fileFormat',
        'regId' => 'regId',
        'scope' => 'scope',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->columns) {
            $res['columns'] = $this->columns;
        }

        if (null !== $this->conditions) {
            $res['conditions'] = $this->conditions;
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

        if (null !== $this->fileFormat) {
            $res['fileFormat'] = $this->fileFormat;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['columns'])) {
            $model->columns = $map['columns'];
        }

        if (isset($map['conditions'])) {
            $model->conditions = $map['conditions'];
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

        if (isset($map['fileFormat'])) {
            $model->fileFormat = $map['fileFormat'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
