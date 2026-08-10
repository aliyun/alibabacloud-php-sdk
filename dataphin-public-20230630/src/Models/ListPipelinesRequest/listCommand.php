<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListPipelinesRequest;

use AlibabaCloud\Dara\Model;

class listCommand extends Model
{
    /**
     * @var string[]
     */
    public $creatorList;

    /**
     * @var string[]
     */
    public $developOwnerList;

    /**
     * @var string[]
     */
    public $directories;

    /**
     * @var bool
     */
    public $exactMatch;

    /**
     * @var string[]
     */
    public $keywords;

    /**
     * @var int
     */
    public $nextCursor;

    /**
     * @var string[]
     */
    public $opsOwnerList;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int[]
     */
    public $pipelineTypeList;

    /**
     * @var bool
     */
    public $recursive;

    /**
     * @var int[]
     */
    public $scheduleTypeList;

    /**
     * @var string[]
     */
    public $submitStatusList;

    /**
     * @var string[]
     */
    public $tagList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'creatorList' => 'CreatorList',
        'developOwnerList' => 'DevelopOwnerList',
        'directories' => 'Directories',
        'exactMatch' => 'ExactMatch',
        'keywords' => 'Keywords',
        'nextCursor' => 'NextCursor',
        'opsOwnerList' => 'OpsOwnerList',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'pipelineTypeList' => 'PipelineTypeList',
        'recursive' => 'Recursive',
        'scheduleTypeList' => 'ScheduleTypeList',
        'submitStatusList' => 'SubmitStatusList',
        'tagList' => 'TagList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->creatorList)) {
            Model::validateArray($this->creatorList);
        }
        if (\is_array($this->developOwnerList)) {
            Model::validateArray($this->developOwnerList);
        }
        if (\is_array($this->directories)) {
            Model::validateArray($this->directories);
        }
        if (\is_array($this->keywords)) {
            Model::validateArray($this->keywords);
        }
        if (\is_array($this->opsOwnerList)) {
            Model::validateArray($this->opsOwnerList);
        }
        if (\is_array($this->pipelineTypeList)) {
            Model::validateArray($this->pipelineTypeList);
        }
        if (\is_array($this->scheduleTypeList)) {
            Model::validateArray($this->scheduleTypeList);
        }
        if (\is_array($this->submitStatusList)) {
            Model::validateArray($this->submitStatusList);
        }
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorList) {
            if (\is_array($this->creatorList)) {
                $res['CreatorList'] = [];
                $n1 = 0;
                foreach ($this->creatorList as $item1) {
                    $res['CreatorList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->developOwnerList) {
            if (\is_array($this->developOwnerList)) {
                $res['DevelopOwnerList'] = [];
                $n1 = 0;
                foreach ($this->developOwnerList as $item1) {
                    $res['DevelopOwnerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->directories) {
            if (\is_array($this->directories)) {
                $res['Directories'] = [];
                $n1 = 0;
                foreach ($this->directories as $item1) {
                    $res['Directories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->exactMatch) {
            $res['ExactMatch'] = $this->exactMatch;
        }

        if (null !== $this->keywords) {
            if (\is_array($this->keywords)) {
                $res['Keywords'] = [];
                $n1 = 0;
                foreach ($this->keywords as $item1) {
                    $res['Keywords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextCursor) {
            $res['NextCursor'] = $this->nextCursor;
        }

        if (null !== $this->opsOwnerList) {
            if (\is_array($this->opsOwnerList)) {
                $res['OpsOwnerList'] = [];
                $n1 = 0;
                foreach ($this->opsOwnerList as $item1) {
                    $res['OpsOwnerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->pipelineTypeList) {
            if (\is_array($this->pipelineTypeList)) {
                $res['PipelineTypeList'] = [];
                $n1 = 0;
                foreach ($this->pipelineTypeList as $item1) {
                    $res['PipelineTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recursive) {
            $res['Recursive'] = $this->recursive;
        }

        if (null !== $this->scheduleTypeList) {
            if (\is_array($this->scheduleTypeList)) {
                $res['ScheduleTypeList'] = [];
                $n1 = 0;
                foreach ($this->scheduleTypeList as $item1) {
                    $res['ScheduleTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->submitStatusList) {
            if (\is_array($this->submitStatusList)) {
                $res['SubmitStatusList'] = [];
                $n1 = 0;
                foreach ($this->submitStatusList as $item1) {
                    $res['SubmitStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tagList) {
            if (\is_array($this->tagList)) {
                $res['TagList'] = [];
                $n1 = 0;
                foreach ($this->tagList as $item1) {
                    $res['TagList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CreatorList'])) {
            if (!empty($map['CreatorList'])) {
                $model->creatorList = [];
                $n1 = 0;
                foreach ($map['CreatorList'] as $item1) {
                    $model->creatorList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DevelopOwnerList'])) {
            if (!empty($map['DevelopOwnerList'])) {
                $model->developOwnerList = [];
                $n1 = 0;
                foreach ($map['DevelopOwnerList'] as $item1) {
                    $model->developOwnerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Directories'])) {
            if (!empty($map['Directories'])) {
                $model->directories = [];
                $n1 = 0;
                foreach ($map['Directories'] as $item1) {
                    $model->directories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExactMatch'])) {
            $model->exactMatch = $map['ExactMatch'];
        }

        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = [];
                $n1 = 0;
                foreach ($map['Keywords'] as $item1) {
                    $model->keywords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NextCursor'])) {
            $model->nextCursor = $map['NextCursor'];
        }

        if (isset($map['OpsOwnerList'])) {
            if (!empty($map['OpsOwnerList'])) {
                $model->opsOwnerList = [];
                $n1 = 0;
                foreach ($map['OpsOwnerList'] as $item1) {
                    $model->opsOwnerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PipelineTypeList'])) {
            if (!empty($map['PipelineTypeList'])) {
                $model->pipelineTypeList = [];
                $n1 = 0;
                foreach ($map['PipelineTypeList'] as $item1) {
                    $model->pipelineTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Recursive'])) {
            $model->recursive = $map['Recursive'];
        }

        if (isset($map['ScheduleTypeList'])) {
            if (!empty($map['ScheduleTypeList'])) {
                $model->scheduleTypeList = [];
                $n1 = 0;
                foreach ($map['ScheduleTypeList'] as $item1) {
                    $model->scheduleTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SubmitStatusList'])) {
            if (!empty($map['SubmitStatusList'])) {
                $model->submitStatusList = [];
                $n1 = 0;
                foreach ($map['SubmitStatusList'] as $item1) {
                    $model->submitStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n1 = 0;
                foreach ($map['TagList'] as $item1) {
                    $model->tagList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
