<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\QueryDisplayKnowledgeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\QueryDisplayKnowledgeResponseBody\data\records;

class data extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $knowledgeBaseStatus;

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
    public $ragId;

    /**
     * @var records[]
     */
    public $records;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var int[]
     */
    public $usageMap;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'knowledgeBaseStatus' => 'KnowledgeBaseStatus',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'ragId' => 'RagId',
        'records' => 'Records',
        'success' => 'Success',
        'taskId' => 'TaskId',
        'total' => 'Total',
        'totalPage' => 'TotalPage',
        'usageMap' => 'UsageMap',
    ];

    public function validate()
    {
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        if (\is_array($this->usageMap)) {
            Model::validateArray($this->usageMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->knowledgeBaseStatus) {
            $res['KnowledgeBaseStatus'] = $this->knowledgeBaseStatus;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->ragId) {
            $res['RagId'] = $this->ragId;
        }

        if (null !== $this->records) {
            if (\is_array($this->records)) {
                $res['Records'] = [];
                $n1 = 0;
                foreach ($this->records as $item1) {
                    $res['Records'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        if (null !== $this->usageMap) {
            if (\is_array($this->usageMap)) {
                $res['UsageMap'] = [];
                foreach ($this->usageMap as $key1 => $value1) {
                    $res['UsageMap'][$key1] = $value1;
                }
            }
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['KnowledgeBaseStatus'])) {
            $model->knowledgeBaseStatus = $map['KnowledgeBaseStatus'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RagId'])) {
            $model->ragId = $map['RagId'];
        }

        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n1 = 0;
                foreach ($map['Records'] as $item1) {
                    $model->records[$n1] = records::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        if (isset($map['UsageMap'])) {
            if (!empty($map['UsageMap'])) {
                $model->usageMap = [];
                foreach ($map['UsageMap'] as $key1 => $value1) {
                    $model->usageMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
