<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAnalysisConditionFavoriteListResponseBody;

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
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'condition'      => 'condition',
        'eventBeginTime' => 'eventBeginTime',
        'eventCodes'     => 'eventCodes',
        'eventEndTime'   => 'eventEndTime',
        'fieldName'      => 'fieldName',
        'fieldValue'     => 'fieldValue',
        'id'             => 'id',
        'name'           => 'name',
        'type'           => 'type',
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
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
