<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListSecurityIdentifyResultsRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string[]
     */
    public $bizUnitNameList;

    /**
     * @var int
     */
    public $classifyId;

    /**
     * @var string[]
     */
    public $datasourceNameList;

    /**
     * @var string
     */
    public $env;

    /**
     * @var bool
     */
    public $isLocked;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $projectNameList;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'bizUnitNameList' => 'BizUnitNameList',
        'classifyId' => 'ClassifyId',
        'datasourceNameList' => 'DatasourceNameList',
        'env' => 'Env',
        'isLocked' => 'IsLocked',
        'keyword' => 'Keyword',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'projectNameList' => 'ProjectNameList',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->bizUnitNameList)) {
            Model::validateArray($this->bizUnitNameList);
        }
        if (\is_array($this->datasourceNameList)) {
            Model::validateArray($this->datasourceNameList);
        }
        if (\is_array($this->projectNameList)) {
            Model::validateArray($this->projectNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitNameList) {
            if (\is_array($this->bizUnitNameList)) {
                $res['BizUnitNameList'] = [];
                $n1 = 0;
                foreach ($this->bizUnitNameList as $item1) {
                    $res['BizUnitNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->classifyId) {
            $res['ClassifyId'] = $this->classifyId;
        }

        if (null !== $this->datasourceNameList) {
            if (\is_array($this->datasourceNameList)) {
                $res['DatasourceNameList'] = [];
                $n1 = 0;
                foreach ($this->datasourceNameList as $item1) {
                    $res['DatasourceNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->isLocked) {
            $res['IsLocked'] = $this->isLocked;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectNameList) {
            if (\is_array($this->projectNameList)) {
                $res['ProjectNameList'] = [];
                $n1 = 0;
                foreach ($this->projectNameList as $item1) {
                    $res['ProjectNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BizUnitNameList'])) {
            if (!empty($map['BizUnitNameList'])) {
                $model->bizUnitNameList = [];
                $n1 = 0;
                foreach ($map['BizUnitNameList'] as $item1) {
                    $model->bizUnitNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClassifyId'])) {
            $model->classifyId = $map['ClassifyId'];
        }

        if (isset($map['DatasourceNameList'])) {
            if (!empty($map['DatasourceNameList'])) {
                $model->datasourceNameList = [];
                $n1 = 0;
                foreach ($map['DatasourceNameList'] as $item1) {
                    $model->datasourceNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['IsLocked'])) {
            $model->isLocked = $map['IsLocked'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectNameList'])) {
            if (!empty($map['ProjectNameList'])) {
                $model->projectNameList = [];
                $n1 = 0;
                foreach ($map['ProjectNameList'] as $item1) {
                    $model->projectNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
