<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models;

use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\SendCouponRequest\userAmountModelList;
use AlibabaCloud\Tea\Model;

class SendCouponRequest extends Model
{
    /**
     * @example 26888
     *
     * @var int
     */
    public $bid;

    /**
     * @example xxx
     *
     * @var string
     */
    public $fromApp;

    /**
     * @example xxx
     *
     * @var string
     */
    public $operator;

    /**
     * @example vsdjomfjsb
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 12348576133
     *
     * @var int
     */
    public $sellerId;

    /**
     * @example 123
     *
     * @var int
     */
    public $templateId;

    /**
     * @var userAmountModelList[]
     */
    public $userAmountModelList;
    protected $_name = [
        'bid'                 => 'Bid',
        'fromApp'             => 'FromApp',
        'operator'            => 'Operator',
        'requestId'           => 'RequestId',
        'sellerId'            => 'SellerId',
        'templateId'          => 'TemplateId',
        'userAmountModelList' => 'UserAmountModelList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->fromApp) {
            $res['FromApp'] = $this->fromApp;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->userAmountModelList) {
            $res['UserAmountModelList'] = [];
            if (null !== $this->userAmountModelList && \is_array($this->userAmountModelList)) {
                $n = 0;
                foreach ($this->userAmountModelList as $item) {
                    $res['UserAmountModelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendCouponRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['FromApp'])) {
            $model->fromApp = $map['FromApp'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UserAmountModelList'])) {
            if (!empty($map['UserAmountModelList'])) {
                $model->userAmountModelList = [];
                $n                          = 0;
                foreach ($map['UserAmountModelList'] as $item) {
                    $model->userAmountModelList[$n++] = null !== $item ? userAmountModelList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
