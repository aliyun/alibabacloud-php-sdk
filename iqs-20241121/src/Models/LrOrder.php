<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class LrOrder extends Model
{
    /**
     * @var AccountCredentialDTO[]
     */
    public $accountCredentials;

    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $commodityId;

    /**
     * @var string
     */
    public $commoditySpec;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $expirationTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderCategory;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $qps;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accountCredentials' => 'accountCredentials',
        'aliUid' => 'aliUid',
        'commodityCode' => 'commodityCode',
        'commodityId' => 'commodityId',
        'commoditySpec' => 'commoditySpec',
        'customerName' => 'customerName',
        'eventTime' => 'eventTime',
        'expirationTime' => 'expirationTime',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'instanceId' => 'instanceId',
        'orderCategory' => 'orderCategory',
        'orderId' => 'orderId',
        'qps' => 'qps',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->accountCredentials)) {
            Model::validateArray($this->accountCredentials);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountCredentials) {
            if (\is_array($this->accountCredentials)) {
                $res['accountCredentials'] = [];
                $n1 = 0;
                foreach ($this->accountCredentials as $item1) {
                    $res['accountCredentials'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->aliUid) {
            $res['aliUid'] = $this->aliUid;
        }

        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }

        if (null !== $this->commodityId) {
            $res['commodityId'] = $this->commodityId;
        }

        if (null !== $this->commoditySpec) {
            $res['commoditySpec'] = $this->commoditySpec;
        }

        if (null !== $this->customerName) {
            $res['customerName'] = $this->customerName;
        }

        if (null !== $this->eventTime) {
            $res['eventTime'] = $this->eventTime;
        }

        if (null !== $this->expirationTime) {
            $res['expirationTime'] = $this->expirationTime;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->orderCategory) {
            $res['orderCategory'] = $this->orderCategory;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->qps) {
            $res['qps'] = $this->qps;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['accountCredentials'])) {
            if (!empty($map['accountCredentials'])) {
                $model->accountCredentials = [];
                $n1 = 0;
                foreach ($map['accountCredentials'] as $item1) {
                    $model->accountCredentials[$n1] = AccountCredentialDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['aliUid'])) {
            $model->aliUid = $map['aliUid'];
        }

        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }

        if (isset($map['commodityId'])) {
            $model->commodityId = $map['commodityId'];
        }

        if (isset($map['commoditySpec'])) {
            $model->commoditySpec = $map['commoditySpec'];
        }

        if (isset($map['customerName'])) {
            $model->customerName = $map['customerName'];
        }

        if (isset($map['eventTime'])) {
            $model->eventTime = $map['eventTime'];
        }

        if (isset($map['expirationTime'])) {
            $model->expirationTime = $map['expirationTime'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['orderCategory'])) {
            $model->orderCategory = $map['orderCategory'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['qps'])) {
            $model->qps = $map['qps'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
