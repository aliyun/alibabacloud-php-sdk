<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class GetAccountInfoRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1215848086704806
     *
     * @var int
     */
    public $uid;

    /**
     * @example 1
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'uid'         => 'Uid',
        'userType'    => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
