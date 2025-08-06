<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\space\hdIconVO;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\space\iconVO;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\space\owner;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children\space\visitorInfo;

class space extends Model
{
    /**
     * @var string
     */
    public $cover;

    /**
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
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var owner
     */
    public $owner;

    /**
     * @var mixed[]
     */
    public $recentList;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $url;

    /**
     * @var visitorInfo
     */
    public $visitorInfo;
    protected $_name = [
        'cover' => 'Cover',
        'description' => 'Description',
        'hdIconVO' => 'HdIconVO',
        'iconVO' => 'IconVO',
        'id' => 'Id',
        'name' => 'Name',
        'owner' => 'Owner',
        'recentList' => 'RecentList',
        'type' => 'Type',
        'url' => 'Url',
        'visitorInfo' => 'VisitorInfo',
    ];

    public function validate()
    {
        if (null !== $this->hdIconVO) {
            $this->hdIconVO->validate();
        }
        if (null !== $this->iconVO) {
            $this->iconVO->validate();
        }
        if (null !== $this->owner) {
            $this->owner->validate();
        }
        if (\is_array($this->recentList)) {
            Model::validateArray($this->recentList);
        }
        if (null !== $this->visitorInfo) {
            $this->visitorInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cover) {
            $res['Cover'] = $this->cover;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hdIconVO) {
            $res['HdIconVO'] = null !== $this->hdIconVO ? $this->hdIconVO->toArray($noStream) : $this->hdIconVO;
        }

        if (null !== $this->iconVO) {
            $res['IconVO'] = null !== $this->iconVO ? $this->iconVO->toArray($noStream) : $this->iconVO;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toArray($noStream) : $this->owner;
        }

        if (null !== $this->recentList) {
            if (\is_array($this->recentList)) {
                $res['RecentList'] = [];
                $n1 = 0;
                foreach ($this->recentList as $item1) {
                    $res['RecentList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->visitorInfo) {
            $res['VisitorInfo'] = null !== $this->visitorInfo ? $this->visitorInfo->toArray($noStream) : $this->visitorInfo;
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
                $model->recentList = [];
                $n1 = 0;
                foreach ($map['RecentList'] as $item1) {
                    $model->recentList[$n1] = $item1;
                    ++$n1;
                }
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
