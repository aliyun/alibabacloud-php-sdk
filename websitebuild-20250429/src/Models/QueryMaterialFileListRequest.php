<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class QueryMaterialFileListRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var int
     */
    public $maxFileSize;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $minFileSize;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orderColumn;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string[]
     */
    public $suffixList;

    /**
     * @var string[]
     */
    public $typeList;
    protected $_name = [
        'bizId' => 'BizId',
        'directoryId' => 'DirectoryId',
        'maxFileSize' => 'MaxFileSize',
        'maxResults' => 'MaxResults',
        'minFileSize' => 'MinFileSize',
        'name' => 'Name',
        'nextToken' => 'NextToken',
        'orderColumn' => 'OrderColumn',
        'orderType' => 'OrderType',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'statusList' => 'StatusList',
        'suffixList' => 'SuffixList',
        'typeList' => 'TypeList',
    ];

    public function validate()
    {
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        if (\is_array($this->suffixList)) {
            Model::validateArray($this->suffixList);
        }
        if (\is_array($this->typeList)) {
            Model::validateArray($this->typeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->maxFileSize) {
            $res['MaxFileSize'] = $this->maxFileSize;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->minFileSize) {
            $res['MinFileSize'] = $this->minFileSize;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orderColumn) {
            $res['OrderColumn'] = $this->orderColumn;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->suffixList) {
            if (\is_array($this->suffixList)) {
                $res['SuffixList'] = [];
                $n1 = 0;
                foreach ($this->suffixList as $item1) {
                    $res['SuffixList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->typeList) {
            if (\is_array($this->typeList)) {
                $res['TypeList'] = [];
                $n1 = 0;
                foreach ($this->typeList as $item1) {
                    $res['TypeList'][$n1] = $item1;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['MaxFileSize'])) {
            $model->maxFileSize = $map['MaxFileSize'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['MinFileSize'])) {
            $model->minFileSize = $map['MinFileSize'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OrderColumn'])) {
            $model->orderColumn = $map['OrderColumn'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SuffixList'])) {
            if (!empty($map['SuffixList'])) {
                $model->suffixList = [];
                $n1 = 0;
                foreach ($map['SuffixList'] as $item1) {
                    $model->suffixList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TypeList'])) {
            if (!empty($map['TypeList'])) {
                $model->typeList = [];
                $n1 = 0;
                foreach ($map['TypeList'] as $item1) {
                    $model->typeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
