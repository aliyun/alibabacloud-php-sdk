<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string[]
     */
    public $alertReasonList;

    /**
     * @var string
     */
    public $keyWord;

    /**
     * @var int[]
     */
    public $logicFieldIdList;

    /**
     * @var int[]
     */
    public $logicalTableIdList;

    /**
     * @var string[]
     */
    public $onCallTableList;

    /**
     * @var string[]
     */
    public $ownerList;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int[]
     */
    public $projectIds;

    /**
     * @var string[]
     */
    public $receivedWayTypeList;

    /**
     * @var string[]
     */
    public $receiverList;

    /**
     * @var string[]
     */
    public $typeList;
    protected $_name = [
        'alertReasonList' => 'AlertReasonList',
        'keyWord' => 'KeyWord',
        'logicFieldIdList' => 'LogicFieldIdList',
        'logicalTableIdList' => 'LogicalTableIdList',
        'onCallTableList' => 'OnCallTableList',
        'ownerList' => 'OwnerList',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'projectIds' => 'ProjectIds',
        'receivedWayTypeList' => 'ReceivedWayTypeList',
        'receiverList' => 'ReceiverList',
        'typeList' => 'TypeList',
    ];

    public function validate()
    {
        if (\is_array($this->alertReasonList)) {
            Model::validateArray($this->alertReasonList);
        }
        if (\is_array($this->logicFieldIdList)) {
            Model::validateArray($this->logicFieldIdList);
        }
        if (\is_array($this->logicalTableIdList)) {
            Model::validateArray($this->logicalTableIdList);
        }
        if (\is_array($this->onCallTableList)) {
            Model::validateArray($this->onCallTableList);
        }
        if (\is_array($this->ownerList)) {
            Model::validateArray($this->ownerList);
        }
        if (\is_array($this->projectIds)) {
            Model::validateArray($this->projectIds);
        }
        if (\is_array($this->receivedWayTypeList)) {
            Model::validateArray($this->receivedWayTypeList);
        }
        if (\is_array($this->receiverList)) {
            Model::validateArray($this->receiverList);
        }
        if (\is_array($this->typeList)) {
            Model::validateArray($this->typeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertReasonList) {
            if (\is_array($this->alertReasonList)) {
                $res['AlertReasonList'] = [];
                $n1 = 0;
                foreach ($this->alertReasonList as $item1) {
                    $res['AlertReasonList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }

        if (null !== $this->logicFieldIdList) {
            if (\is_array($this->logicFieldIdList)) {
                $res['LogicFieldIdList'] = [];
                $n1 = 0;
                foreach ($this->logicFieldIdList as $item1) {
                    $res['LogicFieldIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logicalTableIdList) {
            if (\is_array($this->logicalTableIdList)) {
                $res['LogicalTableIdList'] = [];
                $n1 = 0;
                foreach ($this->logicalTableIdList as $item1) {
                    $res['LogicalTableIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->onCallTableList) {
            if (\is_array($this->onCallTableList)) {
                $res['OnCallTableList'] = [];
                $n1 = 0;
                foreach ($this->onCallTableList as $item1) {
                    $res['OnCallTableList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerList) {
            if (\is_array($this->ownerList)) {
                $res['OwnerList'] = [];
                $n1 = 0;
                foreach ($this->ownerList as $item1) {
                    $res['OwnerList'][$n1] = $item1;
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

        if (null !== $this->projectIds) {
            if (\is_array($this->projectIds)) {
                $res['ProjectIds'] = [];
                $n1 = 0;
                foreach ($this->projectIds as $item1) {
                    $res['ProjectIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->receivedWayTypeList) {
            if (\is_array($this->receivedWayTypeList)) {
                $res['ReceivedWayTypeList'] = [];
                $n1 = 0;
                foreach ($this->receivedWayTypeList as $item1) {
                    $res['ReceivedWayTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->receiverList) {
            if (\is_array($this->receiverList)) {
                $res['ReceiverList'] = [];
                $n1 = 0;
                foreach ($this->receiverList as $item1) {
                    $res['ReceiverList'][$n1] = $item1;
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
        if (isset($map['AlertReasonList'])) {
            if (!empty($map['AlertReasonList'])) {
                $model->alertReasonList = [];
                $n1 = 0;
                foreach ($map['AlertReasonList'] as $item1) {
                    $model->alertReasonList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }

        if (isset($map['LogicFieldIdList'])) {
            if (!empty($map['LogicFieldIdList'])) {
                $model->logicFieldIdList = [];
                $n1 = 0;
                foreach ($map['LogicFieldIdList'] as $item1) {
                    $model->logicFieldIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LogicalTableIdList'])) {
            if (!empty($map['LogicalTableIdList'])) {
                $model->logicalTableIdList = [];
                $n1 = 0;
                foreach ($map['LogicalTableIdList'] as $item1) {
                    $model->logicalTableIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OnCallTableList'])) {
            if (!empty($map['OnCallTableList'])) {
                $model->onCallTableList = [];
                $n1 = 0;
                foreach ($map['OnCallTableList'] as $item1) {
                    $model->onCallTableList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerList'])) {
            if (!empty($map['OwnerList'])) {
                $model->ownerList = [];
                $n1 = 0;
                foreach ($map['OwnerList'] as $item1) {
                    $model->ownerList[$n1] = $item1;
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

        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = [];
                $n1 = 0;
                foreach ($map['ProjectIds'] as $item1) {
                    $model->projectIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ReceivedWayTypeList'])) {
            if (!empty($map['ReceivedWayTypeList'])) {
                $model->receivedWayTypeList = [];
                $n1 = 0;
                foreach ($map['ReceivedWayTypeList'] as $item1) {
                    $model->receivedWayTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ReceiverList'])) {
            if (!empty($map['ReceiverList'])) {
                $model->receiverList = [];
                $n1 = 0;
                foreach ($map['ReceiverList'] as $item1) {
                    $model->receiverList[$n1] = $item1;
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
