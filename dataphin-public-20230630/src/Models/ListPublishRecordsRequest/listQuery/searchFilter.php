<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListPublishRecordsRequest\listQuery;

use AlibabaCloud\Tea\Model;

class searchFilter extends Model
{
    /**
     * @var int[]
     */
    public $changeTypeList;

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
     * @var int[]
     */
    public $projectIdList;

    /**
     * @example 2024-10-10 10:00:00
     *
     * @var string
     */
    public $publishEndTime;

    /**
     * @example 2024-10-10 10:00:00
     *
     * @var string
     */
    public $publishStartTime;

    /**
     * @var int[]
     */
    public $publishStatusList;

    /**
     * @var string[]
     */
    public $submitterList;
    protected $_name = [
        'changeTypeList' => 'ChangeTypeList',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'projectIdList' => 'ProjectIdList',
        'publishEndTime' => 'PublishEndTime',
        'publishStartTime' => 'PublishStartTime',
        'publishStatusList' => 'PublishStatusList',
        'submitterList' => 'SubmitterList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeTypeList) {
            $res['ChangeTypeList'] = $this->changeTypeList;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectIdList) {
            $res['ProjectIdList'] = $this->projectIdList;
        }
        if (null !== $this->publishEndTime) {
            $res['PublishEndTime'] = $this->publishEndTime;
        }
        if (null !== $this->publishStartTime) {
            $res['PublishStartTime'] = $this->publishStartTime;
        }
        if (null !== $this->publishStatusList) {
            $res['PublishStatusList'] = $this->publishStatusList;
        }
        if (null !== $this->submitterList) {
            $res['SubmitterList'] = $this->submitterList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeTypeList'])) {
            if (!empty($map['ChangeTypeList'])) {
                $model->changeTypeList = $map['ChangeTypeList'];
            }
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectIdList'])) {
            if (!empty($map['ProjectIdList'])) {
                $model->projectIdList = $map['ProjectIdList'];
            }
        }
        if (isset($map['PublishEndTime'])) {
            $model->publishEndTime = $map['PublishEndTime'];
        }
        if (isset($map['PublishStartTime'])) {
            $model->publishStartTime = $map['PublishStartTime'];
        }
        if (isset($map['PublishStatusList'])) {
            if (!empty($map['PublishStatusList'])) {
                $model->publishStatusList = $map['PublishStatusList'];
            }
        }
        if (isset($map['SubmitterList'])) {
            if (!empty($map['SubmitterList'])) {
                $model->submitterList = $map['SubmitterList'];
            }
        }

        return $model;
    }
}
