<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class ListNotaryInfosRequest extends Model
{
    /**
     * @var int
     */
    public $notaryType;

    /**
     * @var string
     */
    public $bizOrderNo;

    /**
     * @var string
     */
    public $token;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'notaryType' => 'NotaryType',
        'bizOrderNo' => 'BizOrderNo',
        'token'      => 'Token',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notaryType) {
            $res['NotaryType'] = $this->notaryType;
        }
        if (null !== $this->bizOrderNo) {
            $res['BizOrderNo'] = $this->bizOrderNo;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['NotaryType'])) {
            $model->notaryType = $map['NotaryType'];
        }
        if (isset($map['BizOrderNo'])) {
            $model->bizOrderNo = $map['BizOrderNo'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
