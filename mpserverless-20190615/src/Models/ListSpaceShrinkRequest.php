<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class ListSpaceShrinkRequest extends Model
{
    /**
     * @example 3821658
     *
     * @var string
     */
    public $emasWorkspaceId;

    /**
     * @example 0
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $spaceIdsShrink;
    protected $_name = [
        'emasWorkspaceId' => 'EmasWorkspaceId',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'spaceIdsShrink'  => 'SpaceIds',
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
        if (null !== $this->spaceIdsShrink) {
            $res['SpaceIds'] = $this->spaceIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSpaceShrinkRequest
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
            $model->spaceIdsShrink = $map['SpaceIds'];
        }

        return $model;
    }
}
