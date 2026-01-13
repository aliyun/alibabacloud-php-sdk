<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class GetAccountReviewRecordResponseBody extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $applyType;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var int
     */
    public $qps;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sceneDesc;

    /**
     * @var string[]
     */
    public $scopes;

    /**
     * @var string
     */
    public $serviceType;
    protected $_name = [
        'address' => 'address',
        'aliUid' => 'aliUid',
        'applyType' => 'applyType',
        'contactName' => 'contactName',
        'instanceId' => 'instanceId',
        'phone' => 'phone',
        'productName' => 'productName',
        'qps' => 'qps',
        'requestId' => 'requestId',
        'sceneDesc' => 'sceneDesc',
        'scopes' => 'scopes',
        'serviceType' => 'serviceType',
    ];

    public function validate()
    {
        if (\is_array($this->scopes)) {
            Model::validateArray($this->scopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->aliUid) {
            $res['aliUid'] = $this->aliUid;
        }

        if (null !== $this->applyType) {
            $res['applyType'] = $this->applyType;
        }

        if (null !== $this->contactName) {
            $res['contactName'] = $this->contactName;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->qps) {
            $res['qps'] = $this->qps;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sceneDesc) {
            $res['sceneDesc'] = $this->sceneDesc;
        }

        if (null !== $this->scopes) {
            if (\is_array($this->scopes)) {
                $res['scopes'] = [];
                $n1 = 0;
                foreach ($this->scopes as $item1) {
                    $res['scopes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
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
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['aliUid'])) {
            $model->aliUid = $map['aliUid'];
        }

        if (isset($map['applyType'])) {
            $model->applyType = $map['applyType'];
        }

        if (isset($map['contactName'])) {
            $model->contactName = $map['contactName'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['qps'])) {
            $model->qps = $map['qps'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sceneDesc'])) {
            $model->sceneDesc = $map['sceneDesc'];
        }

        if (isset($map['scopes'])) {
            if (!empty($map['scopes'])) {
                $model->scopes = [];
                $n1 = 0;
                foreach ($map['scopes'] as $item1) {
                    $model->scopes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }

        return $model;
    }
}
