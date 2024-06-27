<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\CreateAnalysisExportTaskResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
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
    public $fileFormat;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'columns'        => 'columns',
        'conditions'     => 'conditions',
        'eventBeginTime' => 'eventBeginTime',
        'eventCodes'     => 'eventCodes',
        'eventEndTime'   => 'eventEndTime',
        'fileFormat'     => 'fileFormat',
        'ossKey'         => 'ossKey',
        'scope'          => 'scope',
        'status'         => 'status',
        'type'           => 'type',
        'userId'         => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->fileFormat) {
            $res['fileFormat'] = $this->fileFormat;
        }
        if (null !== $this->ossKey) {
            $res['ossKey'] = $this->ossKey;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['fileFormat'])) {
            $model->fileFormat = $map['fileFormat'];
        }
        if (isset($map['ossKey'])) {
            $model->ossKey = $map['ossKey'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
