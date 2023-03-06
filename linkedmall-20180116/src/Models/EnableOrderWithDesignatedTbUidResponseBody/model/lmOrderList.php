<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\EnableOrderWithDesignatedTbUidResponseBody\model;

use AlibabaCloud\Tea\Model;

class lmOrderList extends Model
{
    /**
     * @var string[]
     */
    public $extJson;

    /**
     * @example 45***23
     *
     * @var string
     */
    public $lmOrderId;

    /**
     * @var string[]
     */
    public $subLmOrderIdList;
    protected $_name = [
        'extJson'          => 'ExtJson',
        'lmOrderId'        => 'LmOrderId',
        'subLmOrderIdList' => 'SubLmOrderIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->subLmOrderIdList) {
            $res['SubLmOrderIdList'] = $this->subLmOrderIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['SubLmOrderIdList'])) {
            if (!empty($map['SubLmOrderIdList'])) {
                $model->subLmOrderIdList = $map['SubLmOrderIdList'];
            }
        }

        return $model;
    }
}
