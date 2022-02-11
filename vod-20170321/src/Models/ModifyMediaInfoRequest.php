<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ModifyMediaInfoRequest extends Model
{
    /**
     * @description OSS存储地址
     *
     * @var string
     */
    public $aiLabelUrl;

    /**
     * @description 应用
     *
     * @var string
     */
    public $appId;

    /**
     * @description 媒资业务类型
     *
     * @var int
     */
    public $businessType;

    /**
     * @description 分类ID
     *
     * @var int
     */
    public $cateId;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 动态数据
     *
     * @var string
     */
    public $dynamicData;

    /**
     * @description 元数据实体ID
     *
     * @var string
     */
    public $entityId;

    /**
     * @description 智能标签，json结构
     *
     * @var string
     */
    public $label;

    /**
     * @description 媒资Id
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description 媒资类型
     *
     * @var int
     */
    public $mediaType;

    /**
     * @description 媒资来源
     *
     * @var int
     */
    public $source;

    /**
     * @description 视频标签
     *
     * @var string
     */
    public $tags;

    /**
     * @description 标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'aiLabelUrl'   => 'AiLabelUrl',
        'appId'        => 'AppId',
        'businessType' => 'BusinessType',
        'cateId'       => 'CateId',
        'description'  => 'Description',
        'dynamicData'  => 'DynamicData',
        'entityId'     => 'EntityId',
        'label'        => 'Label',
        'mediaId'      => 'MediaId',
        'mediaType'    => 'MediaType',
        'source'       => 'Source',
        'tags'         => 'Tags',
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiLabelUrl) {
            $res['AiLabelUrl'] = $this->aiLabelUrl;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dynamicData) {
            $res['DynamicData'] = $this->dynamicData;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMediaInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiLabelUrl'])) {
            $model->aiLabelUrl = $map['AiLabelUrl'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DynamicData'])) {
            $model->dynamicData = $map['DynamicData'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
