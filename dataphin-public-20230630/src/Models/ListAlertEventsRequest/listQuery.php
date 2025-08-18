<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $alertEndTime;

    /**
     * @var string[]
     */
    public $alertObjectTypeList;

    /**
     * @var string[]
     */
    public $alertReasonList;

    /**
     * @var string
     */
    public $alertStartTime;

    /**
     * @var string[]
     */
    public $bizNameList;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string[]
     */
    public $monitoredItemIdList;

    /**
     * @var int
     */
    public $page;

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
    public $sourceSystem;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'alertEndTime' => 'AlertEndTime',
        'alertObjectTypeList' => 'AlertObjectTypeList',
        'alertReasonList' => 'AlertReasonList',
        'alertStartTime' => 'AlertStartTime',
        'bizNameList' => 'BizNameList',
        'keyword' => 'Keyword',
        'monitoredItemIdList' => 'MonitoredItemIdList',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'projectNameList' => 'ProjectNameList',
        'sourceSystem' => 'SourceSystem',
        'statusList' => 'StatusList',
        'userIdList' => 'UserIdList',
    ];

    public function validate()
    {
        if (\is_array($this->alertObjectTypeList)) {
            Model::validateArray($this->alertObjectTypeList);
        }
        if (\is_array($this->alertReasonList)) {
            Model::validateArray($this->alertReasonList);
        }
        if (\is_array($this->bizNameList)) {
            Model::validateArray($this->bizNameList);
        }
        if (\is_array($this->monitoredItemIdList)) {
            Model::validateArray($this->monitoredItemIdList);
        }
        if (\is_array($this->projectNameList)) {
            Model::validateArray($this->projectNameList);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        if (\is_array($this->userIdList)) {
            Model::validateArray($this->userIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertEndTime) {
            $res['AlertEndTime'] = $this->alertEndTime;
        }

        if (null !== $this->alertObjectTypeList) {
            if (\is_array($this->alertObjectTypeList)) {
                $res['AlertObjectTypeList'] = [];
                $n1 = 0;
                foreach ($this->alertObjectTypeList as $item1) {
                    $res['AlertObjectTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

        if (null !== $this->alertStartTime) {
            $res['AlertStartTime'] = $this->alertStartTime;
        }

        if (null !== $this->bizNameList) {
            if (\is_array($this->bizNameList)) {
                $res['BizNameList'] = [];
                $n1 = 0;
                foreach ($this->bizNameList as $item1) {
                    $res['BizNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->monitoredItemIdList) {
            if (\is_array($this->monitoredItemIdList)) {
                $res['MonitoredItemIdList'] = [];
                $n1 = 0;
                foreach ($this->monitoredItemIdList as $item1) {
                    $res['MonitoredItemIdList'][$n1] = $item1;
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

        if (null !== $this->sourceSystem) {
            $res['SourceSystem'] = $this->sourceSystem;
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

        if (null !== $this->userIdList) {
            if (\is_array($this->userIdList)) {
                $res['UserIdList'] = [];
                $n1 = 0;
                foreach ($this->userIdList as $item1) {
                    $res['UserIdList'][$n1] = $item1;
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
        if (isset($map['AlertEndTime'])) {
            $model->alertEndTime = $map['AlertEndTime'];
        }

        if (isset($map['AlertObjectTypeList'])) {
            if (!empty($map['AlertObjectTypeList'])) {
                $model->alertObjectTypeList = [];
                $n1 = 0;
                foreach ($map['AlertObjectTypeList'] as $item1) {
                    $model->alertObjectTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

        if (isset($map['AlertStartTime'])) {
            $model->alertStartTime = $map['AlertStartTime'];
        }

        if (isset($map['BizNameList'])) {
            if (!empty($map['BizNameList'])) {
                $model->bizNameList = [];
                $n1 = 0;
                foreach ($map['BizNameList'] as $item1) {
                    $model->bizNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['MonitoredItemIdList'])) {
            if (!empty($map['MonitoredItemIdList'])) {
                $model->monitoredItemIdList = [];
                $n1 = 0;
                foreach ($map['MonitoredItemIdList'] as $item1) {
                    $model->monitoredItemIdList[$n1] = $item1;
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

        if (isset($map['SourceSystem'])) {
            $model->sourceSystem = $map['SourceSystem'];
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

        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = [];
                $n1 = 0;
                foreach ($map['UserIdList'] as $item1) {
                    $model->userIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
