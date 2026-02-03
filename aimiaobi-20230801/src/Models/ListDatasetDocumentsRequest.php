<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListDatasetDocumentsRequest extends Model
{
    /**
     * @var string[]
     */
    public $categoryUuids;

    /**
     * @var int
     */
    public $createTimeEnd;

    /**
     * @var int
     */
    public $createTimeStart;

    /**
     * @var string
     */
    public $datasetDescription;

    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string[]
     */
    public $docIds;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var string[]
     */
    public $docUuids;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $excludeFields;

    /**
     * @var string
     */
    public $extend1;

    /**
     * @var string
     */
    public $extend2;

    /**
     * @var string
     */
    public $extend3;

    /**
     * @var string[]
     */
    public $includeFields;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'categoryUuids' => 'CategoryUuids',
        'createTimeEnd' => 'CreateTimeEnd',
        'createTimeStart' => 'CreateTimeStart',
        'datasetDescription' => 'DatasetDescription',
        'datasetId' => 'DatasetId',
        'datasetName' => 'DatasetName',
        'docIds' => 'DocIds',
        'docType' => 'DocType',
        'docUuids' => 'DocUuids',
        'endTime' => 'EndTime',
        'excludeFields' => 'ExcludeFields',
        'extend1' => 'Extend1',
        'extend2' => 'Extend2',
        'extend3' => 'Extend3',
        'includeFields' => 'IncludeFields',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'query' => 'Query',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'tags' => 'Tags',
        'title' => 'Title',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->categoryUuids)) {
            Model::validateArray($this->categoryUuids);
        }
        if (\is_array($this->docIds)) {
            Model::validateArray($this->docIds);
        }
        if (\is_array($this->docUuids)) {
            Model::validateArray($this->docUuids);
        }
        if (\is_array($this->excludeFields)) {
            Model::validateArray($this->excludeFields);
        }
        if (\is_array($this->includeFields)) {
            Model::validateArray($this->includeFields);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryUuids) {
            if (\is_array($this->categoryUuids)) {
                $res['CategoryUuids'] = [];
                $n1 = 0;
                foreach ($this->categoryUuids as $item1) {
                    $res['CategoryUuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }

        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }

        if (null !== $this->datasetDescription) {
            $res['DatasetDescription'] = $this->datasetDescription;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->docIds) {
            if (\is_array($this->docIds)) {
                $res['DocIds'] = [];
                $n1 = 0;
                foreach ($this->docIds as $item1) {
                    $res['DocIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->docUuids) {
            if (\is_array($this->docUuids)) {
                $res['DocUuids'] = [];
                $n1 = 0;
                foreach ($this->docUuids as $item1) {
                    $res['DocUuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->excludeFields) {
            if (\is_array($this->excludeFields)) {
                $res['ExcludeFields'] = [];
                $n1 = 0;
                foreach ($this->excludeFields as $item1) {
                    $res['ExcludeFields'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extend1) {
            $res['Extend1'] = $this->extend1;
        }

        if (null !== $this->extend2) {
            $res['Extend2'] = $this->extend2;
        }

        if (null !== $this->extend3) {
            $res['Extend3'] = $this->extend3;
        }

        if (null !== $this->includeFields) {
            if (\is_array($this->includeFields)) {
                $res['IncludeFields'] = [];
                $n1 = 0;
                foreach ($this->includeFields as $item1) {
                    $res['IncludeFields'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CategoryUuids'])) {
            if (!empty($map['CategoryUuids'])) {
                $model->categoryUuids = [];
                $n1 = 0;
                foreach ($map['CategoryUuids'] as $item1) {
                    $model->categoryUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }

        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }

        if (isset($map['DatasetDescription'])) {
            $model->datasetDescription = $map['DatasetDescription'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['DocIds'])) {
            if (!empty($map['DocIds'])) {
                $model->docIds = [];
                $n1 = 0;
                foreach ($map['DocIds'] as $item1) {
                    $model->docIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['DocUuids'])) {
            if (!empty($map['DocUuids'])) {
                $model->docUuids = [];
                $n1 = 0;
                foreach ($map['DocUuids'] as $item1) {
                    $model->docUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExcludeFields'])) {
            if (!empty($map['ExcludeFields'])) {
                $model->excludeFields = [];
                $n1 = 0;
                foreach ($map['ExcludeFields'] as $item1) {
                    $model->excludeFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Extend1'])) {
            $model->extend1 = $map['Extend1'];
        }

        if (isset($map['Extend2'])) {
            $model->extend2 = $map['Extend2'];
        }

        if (isset($map['Extend3'])) {
            $model->extend3 = $map['Extend3'];
        }

        if (isset($map['IncludeFields'])) {
            if (!empty($map['IncludeFields'])) {
                $model->includeFields = [];
                $n1 = 0;
                foreach ($map['IncludeFields'] as $item1) {
                    $model->includeFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
