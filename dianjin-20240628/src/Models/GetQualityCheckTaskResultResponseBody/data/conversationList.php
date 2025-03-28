<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponseBody\data\conversationList\dialogueList;

class conversationList extends Model
{
    /**
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $customerId;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var string
     */
    public $customerServiceId;

    /**
     * @var string
     */
    public $customerServiceName;

    /**
     * @var dialogueList[]
     */
    public $dialogueList;

    /**
     * @var string
     */
    public $gmtService;
    protected $_name = [
        'callType' => 'callType',
        'customerId' => 'customerId',
        'customerName' => 'customerName',
        'customerServiceId' => 'customerServiceId',
        'customerServiceName' => 'customerServiceName',
        'dialogueList' => 'dialogueList',
        'gmtService' => 'gmtService',
    ];

    public function validate()
    {
        if (\is_array($this->dialogueList)) {
            Model::validateArray($this->dialogueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->dialogueList)) {
                $res['dialogueList'] = [];
                $n1 = 0;
                foreach ($this->dialogueList as $item1) {
                    $res['dialogueList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->gmtService) {
            $res['gmtService'] = $this->gmtService;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['dialogueList'] as $item1) {
                    $model->dialogueList[$n1++] = dialogueList::fromMap($item1);
                }
            }
        }

        if (isset($map['gmtService'])) {
            $model->gmtService = $map['gmtService'];
        }

        return $model;
    }
}
