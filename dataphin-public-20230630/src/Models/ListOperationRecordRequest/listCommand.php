<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListOperationRecordRequest;

use AlibabaCloud\Dara\Model;

class listCommand extends Model
{
    /**
     * @var string
     */
    public $beginTimeEnd;

    /**
     * @var string
     */
    public $beginTimeStart;

    /**
     * @var string
     */
    public $codeContent;

    /**
     * @var int[]
     */
    public $codeType;

    /**
     * @var int[]
     */
    public $duration;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string[]
     */
    public $objectType;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $sortType;

    /**
     * @var int[]
     */
    public $status;

    /**
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'beginTimeEnd' => 'BeginTimeEnd',
        'beginTimeStart' => 'BeginTimeStart',
        'codeContent' => 'CodeContent',
        'codeType' => 'CodeType',
        'duration' => 'Duration',
        'fileName' => 'FileName',
        'objectType' => 'ObjectType',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'sortType' => 'SortType',
        'status' => 'Status',
        'userIds' => 'UserIds',
    ];

    public function validate()
    {
        if (\is_array($this->codeType)) {
            Model::validateArray($this->codeType);
        }
        if (\is_array($this->duration)) {
            Model::validateArray($this->duration);
        }
        if (\is_array($this->objectType)) {
            Model::validateArray($this->objectType);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        if (\is_array($this->userIds)) {
            Model::validateArray($this->userIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginTimeEnd) {
            $res['BeginTimeEnd'] = $this->beginTimeEnd;
        }

        if (null !== $this->beginTimeStart) {
            $res['BeginTimeStart'] = $this->beginTimeStart;
        }

        if (null !== $this->codeContent) {
            $res['CodeContent'] = $this->codeContent;
        }

        if (null !== $this->codeType) {
            if (\is_array($this->codeType)) {
                $res['CodeType'] = [];
                $n1 = 0;
                foreach ($this->codeType as $item1) {
                    $res['CodeType'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->duration) {
            if (\is_array($this->duration)) {
                $res['Duration'] = [];
                $n1 = 0;
                foreach ($this->duration as $item1) {
                    $res['Duration'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->objectType) {
            if (\is_array($this->objectType)) {
                $res['ObjectType'] = [];
                $n1 = 0;
                foreach ($this->objectType as $item1) {
                    $res['ObjectType'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }

        if (null !== $this->status) {
            if (\is_array($this->status)) {
                $res['Status'] = [];
                $n1 = 0;
                foreach ($this->status as $item1) {
                    $res['Status'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userIds) {
            if (\is_array($this->userIds)) {
                $res['UserIds'] = [];
                $n1 = 0;
                foreach ($this->userIds as $item1) {
                    $res['UserIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['BeginTimeEnd'])) {
            $model->beginTimeEnd = $map['BeginTimeEnd'];
        }

        if (isset($map['BeginTimeStart'])) {
            $model->beginTimeStart = $map['BeginTimeStart'];
        }

        if (isset($map['CodeContent'])) {
            $model->codeContent = $map['CodeContent'];
        }

        if (isset($map['CodeType'])) {
            if (!empty($map['CodeType'])) {
                $model->codeType = [];
                $n1 = 0;
                foreach ($map['CodeType'] as $item1) {
                    $model->codeType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Duration'])) {
            if (!empty($map['Duration'])) {
                $model->duration = [];
                $n1 = 0;
                foreach ($map['Duration'] as $item1) {
                    $model->duration[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['ObjectType'])) {
            if (!empty($map['ObjectType'])) {
                $model->objectType = [];
                $n1 = 0;
                foreach ($map['ObjectType'] as $item1) {
                    $model->objectType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }

        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                $n1 = 0;
                foreach ($map['Status'] as $item1) {
                    $model->status[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = [];
                $n1 = 0;
                foreach ($map['UserIds'] as $item1) {
                    $model->userIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
