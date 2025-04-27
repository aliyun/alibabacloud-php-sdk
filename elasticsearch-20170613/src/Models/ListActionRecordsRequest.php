<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class ListActionRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $actionNames;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'actionNames' => 'actionNames',
        'endTime' => 'endTime',
        'filter' => 'filter',
        'page' => 'page',
        'requestId' => 'requestId',
        'size' => 'size',
        'startTime' => 'startTime',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionNames) {
            $res['actionNames'] = $this->actionNames;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['actionNames'])) {
            $model->actionNames = $map['actionNames'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
