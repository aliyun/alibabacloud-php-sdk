<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class AddCardToDirectionalGroupShrinkRequest extends Model
{
    /**
     * @example NEW
     *
     * @var string
     */
    public $addType;

    /**
     * @description Linkcard
     *
     * @example Linkcard
     *
     * @var string
     */
    public $apiProduct;

    /**
     * @example 10000002595
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $iccidListShrink;

    /**
     * @example false
     *
     * @var bool
     */
    public $msgNotify;

    /**
     * @example 123123
     *
     * @var string
     */
    public $serialNo;
    protected $_name = [
        'addType'         => 'AddType',
        'apiProduct'      => 'ApiProduct',
        'groupId'         => 'GroupId',
        'iccidListShrink' => 'IccidList',
        'msgNotify'       => 'MsgNotify',
        'serialNo'        => 'SerialNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addType) {
            $res['AddType'] = $this->addType;
        }
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->iccidListShrink) {
            $res['IccidList'] = $this->iccidListShrink;
        }
        if (null !== $this->msgNotify) {
            $res['MsgNotify'] = $this->msgNotify;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCardToDirectionalGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddType'])) {
            $model->addType = $map['AddType'];
        }
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IccidList'])) {
            $model->iccidListShrink = $map['IccidList'];
        }
        if (isset($map['MsgNotify'])) {
            $model->msgNotify = $map['MsgNotify'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        return $model;
    }
}
