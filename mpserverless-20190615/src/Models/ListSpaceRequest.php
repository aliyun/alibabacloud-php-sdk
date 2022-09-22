<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class ListSpaceRequest extends Model
{
    /**
     * @var string
     */
    public $emasWorkspaceId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $spaceIds;
    protected $_name = [
        'emasWorkspaceId' => 'EmasWorkspaceId',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'spaceIds'        => 'SpaceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emasWorkspaceId) {
            $res['EmasWorkspaceId'] = $this->emasWorkspaceId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->spaceIds) {
            $res['SpaceIds'] = $this->spaceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSpaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmasWorkspaceId'])) {
            $model->emasWorkspaceId = $map['EmasWorkspaceId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SpaceIds'])) {
            if (!empty($map['SpaceIds'])) {
                $model->spaceIds = $map['SpaceIds'];
            }
        }

        return $model;
    }
}
