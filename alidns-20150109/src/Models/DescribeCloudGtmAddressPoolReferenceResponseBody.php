<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressPoolReferenceResponseBody\instanceConfigs;

class DescribeCloudGtmAddressPoolReferenceResponseBody extends Model
{
    /**
     * @var string
     */
    public $addressPoolId;
    /**
     * @var string
     */
    public $addressPoolName;
    /**
     * @var instanceConfigs
     */
    public $instanceConfigs;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'addressPoolId'   => 'AddressPoolId',
        'addressPoolName' => 'AddressPoolName',
        'instanceConfigs' => 'InstanceConfigs',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceConfigs) {
            $this->instanceConfigs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
        }

        if (null !== $this->addressPoolName) {
            $res['AddressPoolName'] = $this->addressPoolName;
        }

        if (null !== $this->instanceConfigs) {
            $res['InstanceConfigs'] = null !== $this->instanceConfigs ? $this->instanceConfigs->toArray($noStream) : $this->instanceConfigs;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AddressPoolId'])) {
            $model->addressPoolId = $map['AddressPoolId'];
        }

        if (isset($map['AddressPoolName'])) {
            $model->addressPoolName = $map['AddressPoolName'];
        }

        if (isset($map['InstanceConfigs'])) {
            $model->instanceConfigs = instanceConfigs::fromMap($map['InstanceConfigs']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
