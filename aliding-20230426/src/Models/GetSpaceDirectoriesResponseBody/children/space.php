<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\space\hdIconVO;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\space\iconVO;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\space\owner;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\space\visitorInfo;
use AlibabaCloud\Tea\Model;

class space extends Model
{
    /**
     * @example https://img.alicdn.com/imgextra/i1/O1xxxxx.png
     *
     * @var string
     */
    public $cover;

    /**
     * @example 这是简介
     *
     * @var string
     */
    public $description;

    /**
     * @var hdIconVO
     */
    public $hdIconVO;

    /**
     * @var iconVO
     */
    public $iconVO;

    /**
     * @example n9XJxxxxx
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 测试知识库
     *
     * @var owner
     */
    public $owner;

    /**
     * @var mixed[]
     */
    public $recentList;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @example https://alidocs.dingtalk.com/i/spaces/n9XJ*******Xy/overview
     *
     * @var string
     */
    public $url;

    /**
     * @var visitorInfo
     */
    public $visitorInfo;
    protected $_name = [
        'cover'       => 'Cover',
        'description' => 'Description',
        'hdIconVO'    => 'HdIconVO',
        'iconVO'      => 'IconVO',
        'id'          => 'Id',
        'name'        => 'Name',
        'owner'       => 'Owner',
        'recentList'  => 'RecentList',
        'type'        => 'Type',
        'url'         => 'Url',
        'visitorInfo' => 'VisitorInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cover) {
            $res['Cover'] = $this->cover;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hdIconVO) {
            $res['HdIconVO'] = null !== $this->hdIconVO ? $this->hdIconVO->toMap() : null;
        }
        if (null !== $this->iconVO) {
            $res['IconVO'] = null !== $this->iconVO ? $this->iconVO->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toMap() : null;
        }
        if (null !== $this->recentList) {
            $res['RecentList'] = $this->recentList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->visitorInfo) {
            $res['VisitorInfo'] = null !== $this->visitorInfo ? $this->visitorInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return space
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cover'])) {
            $model->cover = $map['Cover'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HdIconVO'])) {
            $model->hdIconVO = hdIconVO::fromMap($map['HdIconVO']);
        }
        if (isset($map['IconVO'])) {
            $model->iconVO = iconVO::fromMap($map['IconVO']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = owner::fromMap($map['Owner']);
        }
        if (isset($map['RecentList'])) {
            if (!empty($map['RecentList'])) {
                $model->recentList = $map['RecentList'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['VisitorInfo'])) {
            $model->visitorInfo = visitorInfo::fromMap($map['VisitorInfo']);
        }

        return $model;
    }
}
