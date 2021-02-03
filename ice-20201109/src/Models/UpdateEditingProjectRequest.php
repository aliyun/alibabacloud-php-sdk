<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateEditingProjectRequest extends Model
{
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
     * @description 云剪辑工程封面
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description 云剪辑工程ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 前端编辑器工程数据结构
     *
     * @var string
     */
    public $FEExtend;
    protected $_name = [
        'title'       => 'Title',
        'description' => 'Description',
        'timeline'    => 'Timeline',
        'coverURL'    => 'CoverURL',
        'projectId'   => 'ProjectId',
        'FEExtend'    => 'FEExtend',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->FEExtend) {
            $res['FEExtend'] = $this->FEExtend;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEditingProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['FEExtend'])) {
            $model->FEExtend = $map['FEExtend'];
        }

        return $model;
    }
}
