<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupRequest\tag;

class ListBrowserInstanceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupSetId;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $browserInstanceGroupId;

    /**
     * @var string
     */
    public $browserInstanceGroupName;

    /**
     * @var string
     */
    public $cloudBrowserName;

    /**
     * @var string[]
     */
    public $excludedUserGroupIds;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $tier;

    /**
     * @var string[]
     */
    public $userGroupIds;
    protected $_name = [
        'appInstanceGroupSetId' => 'AppInstanceGroupSetId',
        'bizRegionId' => 'BizRegionId',
        'browserInstanceGroupId' => 'BrowserInstanceGroupId',
        'browserInstanceGroupName' => 'BrowserInstanceGroupName',
        'cloudBrowserName' => 'CloudBrowserName',
        'excludedUserGroupIds' => 'ExcludedUserGroupIds',
        'officeSiteId' => 'OfficeSiteId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'status' => 'Status',
        'tag' => 'Tag',
        'tier' => 'Tier',
        'userGroupIds' => 'UserGroupIds',
    ];

    public function validate()
    {
        if (\is_array($this->excludedUserGroupIds)) {
            Model::validateArray($this->excludedUserGroupIds);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupSetId) {
            $res['AppInstanceGroupSetId'] = $this->appInstanceGroupSetId;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->browserInstanceGroupId) {
            $res['BrowserInstanceGroupId'] = $this->browserInstanceGroupId;
        }

        if (null !== $this->browserInstanceGroupName) {
            $res['BrowserInstanceGroupName'] = $this->browserInstanceGroupName;
        }

        if (null !== $this->cloudBrowserName) {
            $res['CloudBrowserName'] = $this->cloudBrowserName;
        }

        if (null !== $this->excludedUserGroupIds) {
            if (\is_array($this->excludedUserGroupIds)) {
                $res['ExcludedUserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->excludedUserGroupIds as $item1) {
                    $res['ExcludedUserGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->status) {
            if (\is_array($this->status)) {
                $res['Status'] = [];
                $n1 = 0;
                foreach ($this->status as $item1) {
                    $res['Status'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tier) {
            $res['Tier'] = $this->tier;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1] = $item1;
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
        if (isset($map['AppInstanceGroupSetId'])) {
            $model->appInstanceGroupSetId = $map['AppInstanceGroupSetId'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['BrowserInstanceGroupId'])) {
            $model->browserInstanceGroupId = $map['BrowserInstanceGroupId'];
        }

        if (isset($map['BrowserInstanceGroupName'])) {
            $model->browserInstanceGroupName = $map['BrowserInstanceGroupName'];
        }

        if (isset($map['CloudBrowserName'])) {
            $model->cloudBrowserName = $map['CloudBrowserName'];
        }

        if (isset($map['ExcludedUserGroupIds'])) {
            if (!empty($map['ExcludedUserGroupIds'])) {
                $model->excludedUserGroupIds = [];
                $n1 = 0;
                foreach ($map['ExcludedUserGroupIds'] as $item1) {
                    $model->excludedUserGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                $n1 = 0;
                foreach ($map['Status'] as $item1) {
                    $model->status[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tier'])) {
            $model->tier = $map['Tier'];
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
