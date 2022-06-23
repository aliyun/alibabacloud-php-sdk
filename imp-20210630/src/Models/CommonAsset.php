<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CommonAsset extends Model
{
    /**
     * @description 行政区域地址
     *
     * @var CommonAddress
     */
    public $address;

    /**
     * @description 应用ID
     *
     * @var string
     */
    public $appId;

    /**
     * @description 审核状态
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description 作者
     *
     * @var string
     */
    public $author;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description 资产描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 扩展字段
     *
     * @var mixed[]
     */
    public $extends;

    /**
     * @description 资产ID
     *
     * @var string
     */
    public $id;

    /**
     * @description 图像资源
     *
     * @var CommonMediaResource[]
     */
    public $images;

    /**
     * @description 定义Label， eg:type:advertise 支持广告类型的label
     *
     * @var mixed[]
     */
    public $labels;

    /**
     * @description 经纬度地理位置
     *
     * @var TypeLatLng
     */
    public $location;

    /**
     * @description 资产来源
     *
     * @var string
     */
    public $source;

    /**
     * @description 资产状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 概要
     *
     * @var string
     */
    public $synopsis;

    /**
     * @description 标签
     *
     * @var string[]
     */
    public $tags;

    /**
     * @description 标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 更新时间
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @description 视频资源
     *
     * @var CommonMediaResource[]
     */
    public $videos;
    protected $_name = [
        'address'     => 'Address',
        'appId'       => 'AppId',
        'auditStatus' => 'AuditStatus',
        'author'      => 'Author',
        'createdAt'   => 'CreatedAt',
        'description' => 'Description',
        'extends'     => 'Extends',
        'id'          => 'Id',
        'images'      => 'Images',
        'labels'      => 'Labels',
        'location'    => 'Location',
        'source'      => 'Source',
        'status'      => 'Status',
        'synopsis'    => 'Synopsis',
        'tags'        => 'Tags',
        'title'       => 'Title',
        'updatedAt'   => 'UpdatedAt',
        'videos'      => 'Videos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = null !== $this->address ? $this->address->toMap() : null;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->extends) {
            $res['Extends'] = $this->extends;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->images) {
            $res['Images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['Images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->synopsis) {
            $res['Synopsis'] = $this->synopsis;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->videos) {
            $res['Videos'] = [];
            if (null !== $this->videos && \is_array($this->videos)) {
                $n = 0;
                foreach ($this->videos as $item) {
                    $res['Videos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommonAsset
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = CommonAddress::fromMap($map['Address']);
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Extends'])) {
            $model->extends = $map['Extends'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n             = 0;
                foreach ($map['Images'] as $item) {
                    $model->images[$n++] = null !== $item ? CommonMediaResource::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Location'])) {
            $model->location = TypeLatLng::fromMap($map['Location']);
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Synopsis'])) {
            $model->synopsis = $map['Synopsis'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Videos'])) {
            if (!empty($map['Videos'])) {
                $model->videos = [];
                $n             = 0;
                foreach ($map['Videos'] as $item) {
                    $model->videos[$n++] = null !== $item ? CommonMediaResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
