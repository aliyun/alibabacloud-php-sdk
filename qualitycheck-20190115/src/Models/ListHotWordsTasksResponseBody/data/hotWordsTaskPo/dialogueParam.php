<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListHotWordsTasksResponseBody\data\hotWordsTaskPo;

use AlibabaCloud\Tea\Model;

class dialogueParam extends Model
{
    /**
     * @example 154,136,155,156,
     *
     * @var string
     */
    public $dataSetIds;

    /**
     * @example 111
     *
     * @var int
     */
    public $dialogueId;

    /**
     * @example -1
     *
     * @var int
     */
    public $endIndex;

    /**
     * @example 2020-11-06T00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2
     *
     * @var int
     */
    public $role;

    /**
     * @example 3
     *
     * @var int
     */
    public $sourceType;

    /**
     * @example 1
     *
     * @var int
     */
    public $startIndex;

    /**
     * @example 2020-11-05T00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataSetIds' => 'DataSetIds',
        'dialogueId' => 'DialogueId',
        'endIndex'   => 'EndIndex',
        'endTime'    => 'EndTime',
        'role'       => 'Role',
        'sourceType' => 'SourceType',
        'startIndex' => 'StartIndex',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSetIds) {
            $res['DataSetIds'] = $this->dataSetIds;
        }
        if (null !== $this->dialogueId) {
            $res['DialogueId'] = $this->dialogueId;
        }
        if (null !== $this->endIndex) {
            $res['EndIndex'] = $this->endIndex;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->startIndex) {
            $res['StartIndex'] = $this->startIndex;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialogueParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSetIds'])) {
            $model->dataSetIds = $map['DataSetIds'];
        }
        if (isset($map['DialogueId'])) {
            $model->dialogueId = $map['DialogueId'];
        }
        if (isset($map['EndIndex'])) {
            $model->endIndex = $map['EndIndex'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StartIndex'])) {
            $model->startIndex = $map['StartIndex'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
