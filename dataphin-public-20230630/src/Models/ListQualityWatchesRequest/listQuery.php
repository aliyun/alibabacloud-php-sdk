<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityWatchesRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string[]
     */
    public $bizUnitNameList;

    /**
     * @var bool
     */
    public $currentUserOwned;

    /**
     * @var int[]
     */
    public $dataSourceIdList;

    /**
     * @var string[]
     */
    public $dataSourceOwnerList;

    /**
     * @var string[]
     */
    public $dataSourceScopeList;

    /**
     * @var string[]
     */
    public $dataSourceTypeList;

    /**
     * @var string[]
     */
    public $indexComputeTypeList;

    /**
     * @var string[]
     */
    public $indexOwnerList;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string[]
     */
    public $latestWatchTaskStatusList;

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
     * @var string[]
     */
    public $qualityOwnerList;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string[]
     */
    public $tableOwnerList;

    /**
     * @var string[]
     */
    public $tableTypeList;

    /**
     * @var string[]
     */
    public $watchTypeList;
    protected $_name = [
        'bizUnitNameList' => 'BizUnitNameList',
        'currentUserOwned' => 'CurrentUserOwned',
        'dataSourceIdList' => 'DataSourceIdList',
        'dataSourceOwnerList' => 'DataSourceOwnerList',
        'dataSourceScopeList' => 'DataSourceScopeList',
        'dataSourceTypeList' => 'DataSourceTypeList',
        'indexComputeTypeList' => 'IndexComputeTypeList',
        'indexOwnerList' => 'IndexOwnerList',
        'keyword' => 'Keyword',
        'latestWatchTaskStatusList' => 'LatestWatchTaskStatusList',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'projectNameList' => 'ProjectNameList',
        'qualityOwnerList' => 'QualityOwnerList',
        'statusList' => 'StatusList',
        'tableOwnerList' => 'TableOwnerList',
        'tableTypeList' => 'TableTypeList',
        'watchTypeList' => 'WatchTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->bizUnitNameList)) {
            Model::validateArray($this->bizUnitNameList);
        }
        if (\is_array($this->dataSourceIdList)) {
            Model::validateArray($this->dataSourceIdList);
        }
        if (\is_array($this->dataSourceOwnerList)) {
            Model::validateArray($this->dataSourceOwnerList);
        }
        if (\is_array($this->dataSourceScopeList)) {
            Model::validateArray($this->dataSourceScopeList);
        }
        if (\is_array($this->dataSourceTypeList)) {
            Model::validateArray($this->dataSourceTypeList);
        }
        if (\is_array($this->indexComputeTypeList)) {
            Model::validateArray($this->indexComputeTypeList);
        }
        if (\is_array($this->indexOwnerList)) {
            Model::validateArray($this->indexOwnerList);
        }
        if (\is_array($this->latestWatchTaskStatusList)) {
            Model::validateArray($this->latestWatchTaskStatusList);
        }
        if (\is_array($this->projectNameList)) {
            Model::validateArray($this->projectNameList);
        }
        if (\is_array($this->qualityOwnerList)) {
            Model::validateArray($this->qualityOwnerList);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        if (\is_array($this->tableOwnerList)) {
            Model::validateArray($this->tableOwnerList);
        }
        if (\is_array($this->tableTypeList)) {
            Model::validateArray($this->tableTypeList);
        }
        if (\is_array($this->watchTypeList)) {
            Model::validateArray($this->watchTypeList);
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

        if (null !== $this->currentUserOwned) {
            $res['CurrentUserOwned'] = $this->currentUserOwned;
        }

        if (null !== $this->dataSourceIdList) {
            if (\is_array($this->dataSourceIdList)) {
                $res['DataSourceIdList'] = [];
                $n1 = 0;
                foreach ($this->dataSourceIdList as $item1) {
                    $res['DataSourceIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSourceOwnerList) {
            if (\is_array($this->dataSourceOwnerList)) {
                $res['DataSourceOwnerList'] = [];
                $n1 = 0;
                foreach ($this->dataSourceOwnerList as $item1) {
                    $res['DataSourceOwnerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSourceScopeList) {
            if (\is_array($this->dataSourceScopeList)) {
                $res['DataSourceScopeList'] = [];
                $n1 = 0;
                foreach ($this->dataSourceScopeList as $item1) {
                    $res['DataSourceScopeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSourceTypeList) {
            if (\is_array($this->dataSourceTypeList)) {
                $res['DataSourceTypeList'] = [];
                $n1 = 0;
                foreach ($this->dataSourceTypeList as $item1) {
                    $res['DataSourceTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->indexComputeTypeList) {
            if (\is_array($this->indexComputeTypeList)) {
                $res['IndexComputeTypeList'] = [];
                $n1 = 0;
                foreach ($this->indexComputeTypeList as $item1) {
                    $res['IndexComputeTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->indexOwnerList) {
            if (\is_array($this->indexOwnerList)) {
                $res['IndexOwnerList'] = [];
                $n1 = 0;
                foreach ($this->indexOwnerList as $item1) {
                    $res['IndexOwnerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->latestWatchTaskStatusList) {
            if (\is_array($this->latestWatchTaskStatusList)) {
                $res['LatestWatchTaskStatusList'] = [];
                $n1 = 0;
                foreach ($this->latestWatchTaskStatusList as $item1) {
                    $res['LatestWatchTaskStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->qualityOwnerList) {
            if (\is_array($this->qualityOwnerList)) {
                $res['QualityOwnerList'] = [];
                $n1 = 0;
                foreach ($this->qualityOwnerList as $item1) {
                    $res['QualityOwnerList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->tableOwnerList) {
            if (\is_array($this->tableOwnerList)) {
                $res['TableOwnerList'] = [];
                $n1 = 0;
                foreach ($this->tableOwnerList as $item1) {
                    $res['TableOwnerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableTypeList) {
            if (\is_array($this->tableTypeList)) {
                $res['TableTypeList'] = [];
                $n1 = 0;
                foreach ($this->tableTypeList as $item1) {
                    $res['TableTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->watchTypeList) {
            if (\is_array($this->watchTypeList)) {
                $res['WatchTypeList'] = [];
                $n1 = 0;
                foreach ($this->watchTypeList as $item1) {
                    $res['WatchTypeList'][$n1] = $item1;
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

        if (isset($map['CurrentUserOwned'])) {
            $model->currentUserOwned = $map['CurrentUserOwned'];
        }

        if (isset($map['DataSourceIdList'])) {
            if (!empty($map['DataSourceIdList'])) {
                $model->dataSourceIdList = [];
                $n1 = 0;
                foreach ($map['DataSourceIdList'] as $item1) {
                    $model->dataSourceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSourceOwnerList'])) {
            if (!empty($map['DataSourceOwnerList'])) {
                $model->dataSourceOwnerList = [];
                $n1 = 0;
                foreach ($map['DataSourceOwnerList'] as $item1) {
                    $model->dataSourceOwnerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSourceScopeList'])) {
            if (!empty($map['DataSourceScopeList'])) {
                $model->dataSourceScopeList = [];
                $n1 = 0;
                foreach ($map['DataSourceScopeList'] as $item1) {
                    $model->dataSourceScopeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSourceTypeList'])) {
            if (!empty($map['DataSourceTypeList'])) {
                $model->dataSourceTypeList = [];
                $n1 = 0;
                foreach ($map['DataSourceTypeList'] as $item1) {
                    $model->dataSourceTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IndexComputeTypeList'])) {
            if (!empty($map['IndexComputeTypeList'])) {
                $model->indexComputeTypeList = [];
                $n1 = 0;
                foreach ($map['IndexComputeTypeList'] as $item1) {
                    $model->indexComputeTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IndexOwnerList'])) {
            if (!empty($map['IndexOwnerList'])) {
                $model->indexOwnerList = [];
                $n1 = 0;
                foreach ($map['IndexOwnerList'] as $item1) {
                    $model->indexOwnerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['LatestWatchTaskStatusList'])) {
            if (!empty($map['LatestWatchTaskStatusList'])) {
                $model->latestWatchTaskStatusList = [];
                $n1 = 0;
                foreach ($map['LatestWatchTaskStatusList'] as $item1) {
                    $model->latestWatchTaskStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['QualityOwnerList'])) {
            if (!empty($map['QualityOwnerList'])) {
                $model->qualityOwnerList = [];
                $n1 = 0;
                foreach ($map['QualityOwnerList'] as $item1) {
                    $model->qualityOwnerList[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['TableOwnerList'])) {
            if (!empty($map['TableOwnerList'])) {
                $model->tableOwnerList = [];
                $n1 = 0;
                foreach ($map['TableOwnerList'] as $item1) {
                    $model->tableOwnerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TableTypeList'])) {
            if (!empty($map['TableTypeList'])) {
                $model->tableTypeList = [];
                $n1 = 0;
                foreach ($map['TableTypeList'] as $item1) {
                    $model->tableTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WatchTypeList'])) {
            if (!empty($map['WatchTypeList'])) {
                $model->watchTypeList = [];
                $n1 = 0;
                foreach ($map['WatchTypeList'] as $item1) {
                    $model->watchTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
