<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryGuideItemGroupForCrowdOperationRequest extends Model
{
    /**
     * @example LMALL20211119****
     *
     * @var string
     */
    public $bizId;

    /**
     * @example taojinbi-shang******
     *
     * @var string
     */
    public $groupId;

    /**
     * @example ALL
     *
     * @var string
     */
    public $itemState;

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
     * @example level1
     *
     * @var string
     */
    public $userFlag;
    protected $_name = [
        'bizId'      => 'BizId',
        'groupId'    => 'GroupId',
        'itemState'  => 'ItemState',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'userFlag'   => 'UserFlag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->itemState) {
            $res['ItemState'] = $this->itemState;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->userFlag) {
            $res['UserFlag'] = $this->userFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryGuideItemGroupForCrowdOperationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ItemState'])) {
            $model->itemState = $map['ItemState'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UserFlag'])) {
            $model->userFlag = $map['UserFlag'];
        }

        return $model;
    }
}
