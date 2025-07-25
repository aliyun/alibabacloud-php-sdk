<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressPoolReferenceResponseBody\instanceConfigs;
use AlibabaCloud\Tea\Model;

class DescribeCloudGtmAddressPoolReferenceResponseBody extends Model
{
    /**
     * @description The ID of the address pool. This ID uniquely identifies the address pool.
     *
     * @example pool-89528023225442**16
     *
     * @var string
     */
    public $addressPoolId;

    /**
     * @description Address pool name.
     *
     * @example app
     *
     * @var string
     */
    public $addressPoolName;

    /**
     * @description The access domain names that reference the address pool.
     *
     * @var instanceConfigs
     */
    public $instanceConfigs;

    /**
     * @description Unique request identification code.
     *
     * @example 853805EA-3D47-47D5-9A1A-A45C24313ABD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'addressPoolId' => 'AddressPoolId',
        'addressPoolName' => 'AddressPoolName',
        'instanceConfigs' => 'InstanceConfigs',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
        }
        if (null !== $this->addressPoolName) {
            $res['AddressPoolName'] = $this->addressPoolName;
        }
        if (null !== $this->instanceConfigs) {
            $res['InstanceConfigs'] = null !== $this->instanceConfigs ? $this->instanceConfigs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudGtmAddressPoolReferenceResponseBody
     */
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
