<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateEditingProjectRequest extends Model
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
     * @description 工程关联素材，多个素材以逗号（,）分隔；每种类型最多支持10个素材ID
     *
     * @var string
     */
    public $materialMaps;

    /**
     * @description 工程业务配置。如果是直播剪辑工程必填OutputMediaConfig.StorageLocation,   Path 不填默认合成的直播片段存储在根路径下 OutputMediaTarget 不填默认oss-object，可以填vod-media 表示存储到vod  OutputMediaTarget 为vod-media 时，Path不生效。
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
    protected $_name = [
        'title'          => 'Title',
        'description'    => 'Description',
        'timeline'       => 'Timeline',
        'coverURL'       => 'CoverURL',
        'materialMaps'   => 'MaterialMaps',
        'businessConfig' => 'BusinessConfig',
        'projectType'    => 'ProjectType',
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
        if (null !== $this->materialMaps) {
            $res['MaterialMaps'] = $this->materialMaps;
        }
        if (null !== $this->businessConfig) {
            $res['BusinessConfig'] = $this->businessConfig;
        }
        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEditingProjectRequest
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
        if (isset($map['MaterialMaps'])) {
            $model->materialMaps = $map['MaterialMaps'];
        }
        if (isset($map['BusinessConfig'])) {
            $model->businessConfig = $map['BusinessConfig'];
        }
        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }

        return $model;
    }
}
