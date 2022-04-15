<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class ListAppSessionsRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @description 自定义会话id
     *
     * @var string[]
     */
    public $customSessionIds;

    /**
     * @description 页码
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 自定义用户id
     *
     * @var string[]
     */
    public $platformSessionIds;
    protected $_name = [
        'appId'              => 'AppId',
        'customSessionIds'   => 'CustomSessionIds',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'platformSessionIds' => 'PlatformSessionIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->customSessionIds) {
            $res['CustomSessionIds'] = $this->customSessionIds;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->platformSessionIds) {
            $res['PlatformSessionIds'] = $this->platformSessionIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppSessionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CustomSessionIds'])) {
            if (!empty($map['CustomSessionIds'])) {
                $model->customSessionIds = $map['CustomSessionIds'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PlatformSessionIds'])) {
            if (!empty($map['PlatformSessionIds'])) {
                $model->platformSessionIds = $map['PlatformSessionIds'];
            }
        }

        return $model;
    }
}
