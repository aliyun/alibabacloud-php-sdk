<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsRequest;

use AlibabaCloud\Tea\Model;

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
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @var string[]
     */
    public $monitoredItemIdList;

    /**
     * @description This parameter is required.
     *
     * @example 2024-11-27 13:47:00
     *
     * @var string
     */
    public $notifyEndTime;

    /**
     * @description This parameter is required.
     *
     * @example 2024-11-16 00:00:00
     *
     * @var string
     */
    public $notifyStartTime;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example ALL
     *
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
        'alertReasonList'     => 'AlertReasonList',
        'channelTypeList'     => 'ChannelTypeList',
        'customChannelIdList' => 'CustomChannelIdList',
        'keyword'             => 'Keyword',
        'monitoredItemIdList' => 'MonitoredItemIdList',
        'notifyEndTime'       => 'NotifyEndTime',
        'notifyStartTime'     => 'NotifyStartTime',
        'page'                => 'Page',
        'pageSize'            => 'PageSize',
        'sourceSystem'        => 'SourceSystem',
        'statusList'          => 'StatusList',
        'userIdList'          => 'UserIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertReasonList) {
            $res['AlertReasonList'] = $this->alertReasonList;
        }
        if (null !== $this->channelTypeList) {
            $res['ChannelTypeList'] = $this->channelTypeList;
        }
        if (null !== $this->customChannelIdList) {
            $res['CustomChannelIdList'] = $this->customChannelIdList;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->monitoredItemIdList) {
            $res['MonitoredItemIdList'] = $this->monitoredItemIdList;
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
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->userIdList) {
            $res['UserIdList'] = $this->userIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertReasonList'])) {
            if (!empty($map['AlertReasonList'])) {
                $model->alertReasonList = $map['AlertReasonList'];
            }
        }
        if (isset($map['ChannelTypeList'])) {
            if (!empty($map['ChannelTypeList'])) {
                $model->channelTypeList = $map['ChannelTypeList'];
            }
        }
        if (isset($map['CustomChannelIdList'])) {
            if (!empty($map['CustomChannelIdList'])) {
                $model->customChannelIdList = $map['CustomChannelIdList'];
            }
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['MonitoredItemIdList'])) {
            if (!empty($map['MonitoredItemIdList'])) {
                $model->monitoredItemIdList = $map['MonitoredItemIdList'];
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
                $model->statusList = $map['StatusList'];
            }
        }
        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = $map['UserIdList'];
            }
        }

        return $model;
    }
}
