<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class ListAppSessionsRequest extends Model
{
    /**
     * @example 13027XXXX
     *
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $customSessionIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $platformSessionIds;

    /**
     * @example d9a8****
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'appId'              => 'AppId',
        'customSessionIds'   => 'CustomSessionIds',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'platformSessionIds' => 'PlatformSessionIds',
        'projectId'          => 'ProjectId',
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
