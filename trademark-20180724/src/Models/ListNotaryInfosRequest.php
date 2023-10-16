<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class ListNotaryInfosRequest extends Model
{
    /**
     * @example trademark_prepayment_pre-cn-123123test
     *
     * @var string
     */
    public $bizOrderNo;

    /**
     * @example 1
     *
     * @var int
     */
    public $notaryType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2dd2eed1-34d2-4142-811a-8861cf0076c3
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'bizOrderNo' => 'BizOrderNo',
        'notaryType' => 'NotaryType',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'token'      => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizOrderNo) {
            $res['BizOrderNo'] = $this->bizOrderNo;
        }
        if (null !== $this->notaryType) {
            $res['NotaryType'] = $this->notaryType;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNotaryInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizOrderNo'])) {
            $model->bizOrderNo = $map['BizOrderNo'];
        }
        if (isset($map['NotaryType'])) {
            $model->notaryType = $map['NotaryType'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
