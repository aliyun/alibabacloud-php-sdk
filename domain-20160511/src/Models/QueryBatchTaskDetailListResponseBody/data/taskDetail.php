<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models\QueryBatchTaskDetailListResponseBody\data;

use AlibabaCloud\Dara\Model;

class taskDetail extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $taskNo;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $tryCount;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'domainName' => 'DomainName',
        'errorMsg' => 'ErrorMsg',
        'taskNo' => 'TaskNo',
        'taskStatus' => 'TaskStatus',
        'taskType' => 'TaskType',
        'tryCount' => 'TryCount',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->taskNo) {
            $res['TaskNo'] = $this->taskNo;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->tryCount) {
            $res['TryCount'] = $this->tryCount;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['TaskNo'])) {
            $model->taskNo = $map['TaskNo'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['TryCount'])) {
            $model->tryCount = $map['TryCount'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
