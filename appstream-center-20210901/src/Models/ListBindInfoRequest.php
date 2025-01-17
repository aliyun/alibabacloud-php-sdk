<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListBindInfoRequest extends Model
{
    /**
     * @var string[]
     */
    public $appIdList;

    /**
     * @var string[]
     */
    public $appInstanceGroupIdList;

    /**
     * @var string[]
     */
    public $appInstanceIdList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $userIdList;

    /**
     * @var string[]
     */
    public $wyIdList;
    protected $_name = [
        'appIdList'              => 'AppIdList',
        'appInstanceGroupIdList' => 'AppInstanceGroupIdList',
        'appInstanceIdList'      => 'AppInstanceIdList',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'userIdList'             => 'UserIdList',
        'wyIdList'               => 'WyIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIdList) {
            $res['AppIdList'] = $this->appIdList;
        }
        if (null !== $this->appInstanceGroupIdList) {
            $res['AppInstanceGroupIdList'] = $this->appInstanceGroupIdList;
        }
        if (null !== $this->appInstanceIdList) {
            $res['AppInstanceIdList'] = $this->appInstanceIdList;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->userIdList) {
            $res['UserIdList'] = $this->userIdList;
        }
        if (null !== $this->wyIdList) {
            $res['WyIdList'] = $this->wyIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBindInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIdList'])) {
            if (!empty($map['AppIdList'])) {
                $model->appIdList = $map['AppIdList'];
            }
        }
        if (isset($map['AppInstanceGroupIdList'])) {
            if (!empty($map['AppInstanceGroupIdList'])) {
                $model->appInstanceGroupIdList = $map['AppInstanceGroupIdList'];
            }
        }
        if (isset($map['AppInstanceIdList'])) {
            if (!empty($map['AppInstanceIdList'])) {
                $model->appInstanceIdList = $map['AppInstanceIdList'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = $map['UserIdList'];
            }
        }
        if (isset($map['WyIdList'])) {
            if (!empty($map['WyIdList'])) {
                $model->wyIdList = $map['WyIdList'];
            }
        }

        return $model;
    }
}
