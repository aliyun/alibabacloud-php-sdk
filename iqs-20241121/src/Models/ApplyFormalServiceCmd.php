<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class ApplyFormalServiceCmd extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $address;

    /**
     * @var mixed[][]
     */
    public $applyServiceInfos;

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
    public $sceneDesc;

    /**
     * @var string
     */
    public $serviceType;
    protected $_name = [
        'accountId' => 'accountId',
        'accountName' => 'accountName',
        'address' => 'address',
        'applyServiceInfos' => 'applyServiceInfos',
        'applyType' => 'applyType',
        'contactName' => 'contactName',
        'instanceId' => 'instanceId',
        'phone' => 'phone',
        'productName' => 'productName',
        'qps' => 'qps',
        'sceneDesc' => 'sceneDesc',
        'serviceType' => 'serviceType',
    ];

    public function validate()
    {
        if (\is_array($this->applyServiceInfos)) {
            Model::validateArray($this->applyServiceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->accountName) {
            $res['accountName'] = $this->accountName;
        }

        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->applyServiceInfos) {
            if (\is_array($this->applyServiceInfos)) {
                $res['applyServiceInfos'] = [];
                $n1 = 0;
                foreach ($this->applyServiceInfos as $item1) {
                    if (\is_array($item1)) {
                        $res['applyServiceInfos'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['applyServiceInfos'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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

        if (null !== $this->sceneDesc) {
            $res['sceneDesc'] = $this->sceneDesc;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['accountName'])) {
            $model->accountName = $map['accountName'];
        }

        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['applyServiceInfos'])) {
            if (!empty($map['applyServiceInfos'])) {
                $model->applyServiceInfos = [];
                $n1 = 0;
                foreach ($map['applyServiceInfos'] as $item1) {
                    if (!empty($item1)) {
                        $model->applyServiceInfos[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->applyServiceInfos[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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

        if (isset($map['sceneDesc'])) {
            $model->sceneDesc = $map['sceneDesc'];
        }

        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }

        return $model;
    }
}
