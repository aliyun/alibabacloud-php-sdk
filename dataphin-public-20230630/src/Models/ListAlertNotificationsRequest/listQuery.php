<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string[]
     */
    public $alertReasonList;

    /**
     * @var string[]
     */
    public $channelTypeList;

    /**
     * @var string[]
     */
    public $customChannelIdList;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string[]
     */
    public $monitoredItemIdList;

    /**
     * @var string
     */
    public $notifyEndTime;

    /**
     * @var string
     */
    public $notifyStartTime;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

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
        'alertReasonList' => 'AlertReasonList',
        'channelTypeList' => 'ChannelTypeList',
        'customChannelIdList' => 'CustomChannelIdList',
        'keyword' => 'Keyword',
        'monitoredItemIdList' => 'MonitoredItemIdList',
        'notifyEndTime' => 'NotifyEndTime',
        'notifyStartTime' => 'NotifyStartTime',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'sourceSystem' => 'SourceSystem',
        'statusList' => 'StatusList',
        'userIdList' => 'UserIdList',
    ];

    public function validate()
    {
        if (\is_array($this->alertReasonList)) {
            Model::validateArray($this->alertReasonList);
        }
        if (\is_array($this->channelTypeList)) {
            Model::validateArray($this->channelTypeList);
        }
        if (\is_array($this->customChannelIdList)) {
            Model::validateArray($this->customChannelIdList);
        }
        if (\is_array($this->monitoredItemIdList)) {
            Model::validateArray($this->monitoredItemIdList);
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

        if (null !== $this->channelTypeList) {
            if (\is_array($this->channelTypeList)) {
                $res['ChannelTypeList'] = [];
                $n1 = 0;
                foreach ($this->channelTypeList as $item1) {
                    $res['ChannelTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customChannelIdList) {
            if (\is_array($this->customChannelIdList)) {
                $res['CustomChannelIdList'] = [];
                $n1 = 0;
                foreach ($this->customChannelIdList as $item1) {
                    $res['CustomChannelIdList'][$n1] = $item1;
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

        if (null !== $this->notifyEndTime) {
            $res['NotifyEndTime'] = $this->notifyEndTime;
        }

        if (null !== $this->notifyStartTime) {
            $res['NotifyStartTime'] = $this->notifyStartTime;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (isset($map['ChannelTypeList'])) {
            if (!empty($map['ChannelTypeList'])) {
                $model->channelTypeList = [];
                $n1 = 0;
                foreach ($map['ChannelTypeList'] as $item1) {
                    $model->channelTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CustomChannelIdList'])) {
            if (!empty($map['CustomChannelIdList'])) {
                $model->customChannelIdList = [];
                $n1 = 0;
                foreach ($map['CustomChannelIdList'] as $item1) {
                    $model->customChannelIdList[$n1] = $item1;
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

        if (isset($map['NotifyEndTime'])) {
            $model->notifyEndTime = $map['NotifyEndTime'];
        }

        if (isset($map['NotifyStartTime'])) {
            $model->notifyStartTime = $map['NotifyStartTime'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
