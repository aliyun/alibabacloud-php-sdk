<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListRayJobRequest\submitTime;

class ListRayJobRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $submissionId;

    /**
     * @var submitTime
     */
    public $submitTime;

    /**
     * @var string
     */
    public $taskBizId;
    protected $_name = [
        'name' => 'name',
        'pageNum' => 'pageNum',
        'pageSize' => 'pageSize',
        'submissionId' => 'submissionId',
        'submitTime' => 'submitTime',
        'taskBizId' => 'taskBizId',
    ];

    public function validate()
    {
        if (null !== $this->submitTime) {
            $this->submitTime->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->submissionId) {
            $res['submissionId'] = $this->submissionId;
        }

        if (null !== $this->submitTime) {
            $res['submitTime'] = null !== $this->submitTime ? $this->submitTime->toArray($noStream) : $this->submitTime;
        }

        if (null !== $this->taskBizId) {
            $res['taskBizId'] = $this->taskBizId;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['submissionId'])) {
            $model->submissionId = $map['submissionId'];
        }

        if (isset($map['submitTime'])) {
            $model->submitTime = submitTime::fromMap($map['submitTime']);
        }

        if (isset($map['taskBizId'])) {
            $model->taskBizId = $map['taskBizId'];
        }

        return $model;
    }
}
