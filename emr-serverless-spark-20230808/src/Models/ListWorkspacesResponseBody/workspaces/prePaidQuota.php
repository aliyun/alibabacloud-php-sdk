<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesResponseBody\workspaces;

use AlibabaCloud\Dara\Model;

class prePaidQuota extends Model
{
    /**
     * @var string
     */
    public $allocatedResource;

    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $maxResource;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $paymentStatus;

    /**
     * @var string
     */
    public $usedResource;
    protected $_name = [
        'allocatedResource' => 'allocatedResource',
        'autoRenewal' => 'autoRenewal',
        'createTime' => 'createTime',
        'expireTime' => 'expireTime',
        'instanceId' => 'instanceId',
        'maxResource' => 'maxResource',
        'orderId' => 'orderId',
        'paymentStatus' => 'paymentStatus',
        'usedResource' => 'usedResource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocatedResource) {
            $res['allocatedResource'] = $this->allocatedResource;
        }

        if (null !== $this->autoRenewal) {
            $res['autoRenewal'] = $this->autoRenewal;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->maxResource) {
            $res['maxResource'] = $this->maxResource;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->paymentStatus) {
            $res['paymentStatus'] = $this->paymentStatus;
        }

        if (null !== $this->usedResource) {
            $res['usedResource'] = $this->usedResource;
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
        if (isset($map['allocatedResource'])) {
            $model->allocatedResource = $map['allocatedResource'];
        }

        if (isset($map['autoRenewal'])) {
            $model->autoRenewal = $map['autoRenewal'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['maxResource'])) {
            $model->maxResource = $map['maxResource'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['paymentStatus'])) {
            $model->paymentStatus = $map['paymentStatus'];
        }

        if (isset($map['usedResource'])) {
            $model->usedResource = $map['usedResource'];
        }

        return $model;
    }
}
