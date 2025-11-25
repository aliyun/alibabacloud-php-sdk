<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class ListJobInfosRequest extends Model
{
    /**
     * @var bool
     */
    public $ascOrder;

    /**
     * @var string[]
     */
    public $extNodeIdList;

    /**
     * @var string[]
     */
    public $extNodeNameList;

    /**
     * @var int
     */
    public $from;

    /**
     * @var string[]
     */
    public $instanceIdList;

    /**
     * @var string[]
     */
    public $jobOwnerList;

    /**
     * @var int[]
     */
    public $priorityList;

    /**
     * @var string[]
     */
    public $projectList;

    /**
     * @var string
     */
    public $quotaNickname;

    /**
     * @var string[]
     */
    public $sceneTagList;

    /**
     * @var string[]
     */
    public $signatureList;

    /**
     * @var string[]
     */
    public $sortByList;

    /**
     * @var string[]
     */
    public $sortOrderList;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string[]
     */
    public $taskNameList;

    /**
     * @var int
     */
    public $to;

    /**
     * @var string[]
     */
    public $typeList;

    /**
     * @var string
     */
    public $orderColumn;

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
    public $region;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'ascOrder' => 'ascOrder',
        'extNodeIdList' => 'extNodeIdList',
        'extNodeNameList' => 'extNodeNameList',
        'from' => 'from',
        'instanceIdList' => 'instanceIdList',
        'jobOwnerList' => 'jobOwnerList',
        'priorityList' => 'priorityList',
        'projectList' => 'projectList',
        'quotaNickname' => 'quotaNickname',
        'sceneTagList' => 'sceneTagList',
        'signatureList' => 'signatureList',
        'sortByList' => 'sortByList',
        'sortOrderList' => 'sortOrderList',
        'statusList' => 'statusList',
        'taskNameList' => 'taskNameList',
        'to' => 'to',
        'typeList' => 'typeList',
        'orderColumn' => 'orderColumn',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'region' => 'region',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->extNodeIdList)) {
            Model::validateArray($this->extNodeIdList);
        }
        if (\is_array($this->extNodeNameList)) {
            Model::validateArray($this->extNodeNameList);
        }
        if (\is_array($this->instanceIdList)) {
            Model::validateArray($this->instanceIdList);
        }
        if (\is_array($this->jobOwnerList)) {
            Model::validateArray($this->jobOwnerList);
        }
        if (\is_array($this->priorityList)) {
            Model::validateArray($this->priorityList);
        }
        if (\is_array($this->projectList)) {
            Model::validateArray($this->projectList);
        }
        if (\is_array($this->sceneTagList)) {
            Model::validateArray($this->sceneTagList);
        }
        if (\is_array($this->signatureList)) {
            Model::validateArray($this->signatureList);
        }
        if (\is_array($this->sortByList)) {
            Model::validateArray($this->sortByList);
        }
        if (\is_array($this->sortOrderList)) {
            Model::validateArray($this->sortOrderList);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        if (\is_array($this->taskNameList)) {
            Model::validateArray($this->taskNameList);
        }
        if (\is_array($this->typeList)) {
            Model::validateArray($this->typeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ascOrder) {
            $res['ascOrder'] = $this->ascOrder;
        }

        if (null !== $this->extNodeIdList) {
            if (\is_array($this->extNodeIdList)) {
                $res['extNodeIdList'] = [];
                $n1 = 0;
                foreach ($this->extNodeIdList as $item1) {
                    $res['extNodeIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extNodeNameList) {
            if (\is_array($this->extNodeNameList)) {
                $res['extNodeNameList'] = [];
                $n1 = 0;
                foreach ($this->extNodeNameList as $item1) {
                    $res['extNodeNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->from) {
            $res['from'] = $this->from;
        }

        if (null !== $this->instanceIdList) {
            if (\is_array($this->instanceIdList)) {
                $res['instanceIdList'] = [];
                $n1 = 0;
                foreach ($this->instanceIdList as $item1) {
                    $res['instanceIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobOwnerList) {
            if (\is_array($this->jobOwnerList)) {
                $res['jobOwnerList'] = [];
                $n1 = 0;
                foreach ($this->jobOwnerList as $item1) {
                    $res['jobOwnerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->priorityList) {
            if (\is_array($this->priorityList)) {
                $res['priorityList'] = [];
                $n1 = 0;
                foreach ($this->priorityList as $item1) {
                    $res['priorityList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectList) {
            if (\is_array($this->projectList)) {
                $res['projectList'] = [];
                $n1 = 0;
                foreach ($this->projectList as $item1) {
                    $res['projectList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->quotaNickname) {
            $res['quotaNickname'] = $this->quotaNickname;
        }

        if (null !== $this->sceneTagList) {
            if (\is_array($this->sceneTagList)) {
                $res['sceneTagList'] = [];
                $n1 = 0;
                foreach ($this->sceneTagList as $item1) {
                    $res['sceneTagList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->signatureList) {
            if (\is_array($this->signatureList)) {
                $res['signatureList'] = [];
                $n1 = 0;
                foreach ($this->signatureList as $item1) {
                    $res['signatureList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sortByList) {
            if (\is_array($this->sortByList)) {
                $res['sortByList'] = [];
                $n1 = 0;
                foreach ($this->sortByList as $item1) {
                    $res['sortByList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sortOrderList) {
            if (\is_array($this->sortOrderList)) {
                $res['sortOrderList'] = [];
                $n1 = 0;
                foreach ($this->sortOrderList as $item1) {
                    $res['sortOrderList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['statusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['statusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskNameList) {
            if (\is_array($this->taskNameList)) {
                $res['taskNameList'] = [];
                $n1 = 0;
                foreach ($this->taskNameList as $item1) {
                    $res['taskNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->to) {
            $res['to'] = $this->to;
        }

        if (null !== $this->typeList) {
            if (\is_array($this->typeList)) {
                $res['typeList'] = [];
                $n1 = 0;
                foreach ($this->typeList as $item1) {
                    $res['typeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderColumn) {
            $res['orderColumn'] = $this->orderColumn;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['ascOrder'])) {
            $model->ascOrder = $map['ascOrder'];
        }

        if (isset($map['extNodeIdList'])) {
            if (!empty($map['extNodeIdList'])) {
                $model->extNodeIdList = [];
                $n1 = 0;
                foreach ($map['extNodeIdList'] as $item1) {
                    $model->extNodeIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['extNodeNameList'])) {
            if (!empty($map['extNodeNameList'])) {
                $model->extNodeNameList = [];
                $n1 = 0;
                foreach ($map['extNodeNameList'] as $item1) {
                    $model->extNodeNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['from'])) {
            $model->from = $map['from'];
        }

        if (isset($map['instanceIdList'])) {
            if (!empty($map['instanceIdList'])) {
                $model->instanceIdList = [];
                $n1 = 0;
                foreach ($map['instanceIdList'] as $item1) {
                    $model->instanceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['jobOwnerList'])) {
            if (!empty($map['jobOwnerList'])) {
                $model->jobOwnerList = [];
                $n1 = 0;
                foreach ($map['jobOwnerList'] as $item1) {
                    $model->jobOwnerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['priorityList'])) {
            if (!empty($map['priorityList'])) {
                $model->priorityList = [];
                $n1 = 0;
                foreach ($map['priorityList'] as $item1) {
                    $model->priorityList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['projectList'])) {
            if (!empty($map['projectList'])) {
                $model->projectList = [];
                $n1 = 0;
                foreach ($map['projectList'] as $item1) {
                    $model->projectList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['quotaNickname'])) {
            $model->quotaNickname = $map['quotaNickname'];
        }

        if (isset($map['sceneTagList'])) {
            if (!empty($map['sceneTagList'])) {
                $model->sceneTagList = [];
                $n1 = 0;
                foreach ($map['sceneTagList'] as $item1) {
                    $model->sceneTagList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['signatureList'])) {
            if (!empty($map['signatureList'])) {
                $model->signatureList = [];
                $n1 = 0;
                foreach ($map['signatureList'] as $item1) {
                    $model->signatureList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['sortByList'])) {
            if (!empty($map['sortByList'])) {
                $model->sortByList = [];
                $n1 = 0;
                foreach ($map['sortByList'] as $item1) {
                    $model->sortByList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['sortOrderList'])) {
            if (!empty($map['sortOrderList'])) {
                $model->sortOrderList = [];
                $n1 = 0;
                foreach ($map['sortOrderList'] as $item1) {
                    $model->sortOrderList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['statusList'])) {
            if (!empty($map['statusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['statusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['taskNameList'])) {
            if (!empty($map['taskNameList'])) {
                $model->taskNameList = [];
                $n1 = 0;
                foreach ($map['taskNameList'] as $item1) {
                    $model->taskNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        if (isset($map['typeList'])) {
            if (!empty($map['typeList'])) {
                $model->typeList = [];
                $n1 = 0;
                foreach ($map['typeList'] as $item1) {
                    $model->typeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['orderColumn'])) {
            $model->orderColumn = $map['orderColumn'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
