<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreateQualityCheckTaskRequest;

use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateQualityCheckTaskRequest\conversationList\dialogueList;
use AlibabaCloud\Tea\Model;

class conversationList extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $callType;

    /**
     * @example 1
     *
     * @var string
     */
    public $customerId;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @example xxx
     *
     * @var string
     */
    public $customerServiceId;

    /**
     * @var string
     */
    public $customerServiceName;

    /**
     * @description This parameter is required.
     *
     * @var dialogueList[]
     */
    public $dialogueList;

    /**
     * @example 2024-09-27 11:23:20
     *
     * @var string
     */
    public $gmtService;
    protected $_name = [
        'callType'            => 'callType',
        'customerId'          => 'customerId',
        'customerName'        => 'customerName',
        'customerServiceId'   => 'customerServiceId',
        'customerServiceName' => 'customerServiceName',
        'dialogueList'        => 'dialogueList',
        'gmtService'          => 'gmtService',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callType) {
            $res['callType'] = $this->callType;
        }
        if (null !== $this->customerId) {
            $res['customerId'] = $this->customerId;
        }
        if (null !== $this->customerName) {
            $res['customerName'] = $this->customerName;
        }
        if (null !== $this->customerServiceId) {
            $res['customerServiceId'] = $this->customerServiceId;
        }
        if (null !== $this->customerServiceName) {
            $res['customerServiceName'] = $this->customerServiceName;
        }
        if (null !== $this->dialogueList) {
            $res['dialogueList'] = [];
            if (null !== $this->dialogueList && \is_array($this->dialogueList)) {
                $n = 0;
                foreach ($this->dialogueList as $item) {
                    $res['dialogueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtService) {
            $res['gmtService'] = $this->gmtService;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conversationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['callType'])) {
            $model->callType = $map['callType'];
        }
        if (isset($map['customerId'])) {
            $model->customerId = $map['customerId'];
        }
        if (isset($map['customerName'])) {
            $model->customerName = $map['customerName'];
        }
        if (isset($map['customerServiceId'])) {
            $model->customerServiceId = $map['customerServiceId'];
        }
        if (isset($map['customerServiceName'])) {
            $model->customerServiceName = $map['customerServiceName'];
        }
        if (isset($map['dialogueList'])) {
            if (!empty($map['dialogueList'])) {
                $model->dialogueList = [];
                $n                   = 0;
                foreach ($map['dialogueList'] as $item) {
                    $model->dialogueList[$n++] = null !== $item ? dialogueList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['gmtService'])) {
            $model->gmtService = $map['gmtService'];
        }

        return $model;
    }
}
