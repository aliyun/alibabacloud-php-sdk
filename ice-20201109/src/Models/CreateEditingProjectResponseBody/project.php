<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateEditingProjectResponseBody;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @description 云剪辑工程ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 云剪辑工程标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 云剪辑工程描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 云剪辑工程时间线，Json格式
     *
     * @var string
     */
    public $timeline;

    /**
     * @description 云剪辑工程封面。
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description 云剪辑工程状态。  所有云剪辑工程状态列表：  -1:Draft  -2:Editing  -3:Producing  -4:Produced  -5:ProduceFailed  -7:Deleted
     *
     * @var int
     */
    public $status;

    /**
     * @description 云剪辑状态名称，对应状态列表中状态名称。
     *
     * @var string
     */
    public $statusName;

    /**
     * @description 云剪辑工程创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 云剪辑工程编辑时间
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description 云剪辑工程时长
     *
     * @var float
     */
    public $duration;

    /**
     * @description 云剪辑工程创建方式  -OpenAPI  -AliyunConsole  -WebSDK -LiveEditingOpenAPI -LiveEditingConsole
     *
     * @var string
     */
    public $createSource;

    /**
     * @description 云剪辑工程创建方式  -OpenAPI  -AliyunConsole  -WebSDK -LiveEditingOpenAPI -LiveEditingConsole
     *
     * @var string
     */
    public $modifiedSource;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @description 工程业务配置
     *
     * @var string
     */
    public $businessConfig;

    /**
     * @description 剪辑工程类型，EditingProject: 普通剪辑工程；LiveEditingProject: 直播剪辑工程
     *
     * @var string
     */
    public $projectType;

    /**
     * @description 业务状态，业务状态 /** 预约中 **\/ RESERVING(0, "Reserving"), /** 预约取消 **\/ RESERVATION_CANCELED(1, "ReservationCanceled"), /** 直播中 **\/ BROADCASTING(3, "BroadCasting"), /** 加载失败 **\/ LOADING_FAILED(4, "LoadingFailed"), /** 直播结束 **\/ LIVE_FINISHED(5, "LiveFinished");
     *
     * @var string
     */
    public $businessStatus;
    protected $_name = [
        'projectId'      => 'ProjectId',
        'title'          => 'Title',
        'description'    => 'Description',
        'timeline'       => 'Timeline',
        'coverURL'       => 'CoverURL',
        'status'         => 'Status',
        'statusName'     => 'StatusName',
        'createTime'     => 'CreateTime',
        'modifiedTime'   => 'ModifiedTime',
        'duration'       => 'Duration',
        'createSource'   => 'CreateSource',
        'modifiedSource' => 'ModifiedSource',
        'templateType'   => 'TemplateType',
        'businessConfig' => 'BusinessConfig',
        'projectType'    => 'ProjectType',
        'businessStatus' => 'BusinessStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }
        if (null !== $this->modifiedSource) {
            $res['ModifiedSource'] = $this->modifiedSource;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->businessConfig) {
            $res['BusinessConfig'] = $this->businessConfig;
        }
        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return project
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }
        if (isset($map['ModifiedSource'])) {
            $model->modifiedSource = $map['ModifiedSource'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['BusinessConfig'])) {
            $model->businessConfig = $map['BusinessConfig'];
        }
        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }

        return $model;
    }
}
