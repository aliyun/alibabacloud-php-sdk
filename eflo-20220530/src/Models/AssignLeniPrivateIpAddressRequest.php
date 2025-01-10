<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class AssignLeniPrivateIpAddressRequest extends Model
{
    /**
     * @description The idempotent identifier.
     *
     * @example 3fd79d62-ab1d-11ec-9a53-0242ac110004
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the response code.
     *
     * @example wuhuaiyu
     *
     * @var string
     */
    public $description;

    /**
     * @description Lingjun Elastic Network Interface ID.
     *
     * This parameter is required.
     * @example leni-1234****
     *
     * @var string
     */
    public $elasticNetworkInterfaceId;

    /**
     * @description Lingjun Elastic Network Interface secondary private network IP (automatically assigned by default).
     *
     * @example 10.0.****
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'               => 'ClientToken',
        'description'               => 'Description',
        'elasticNetworkInterfaceId' => 'ElasticNetworkInterfaceId',
        'privateIpAddress'          => 'PrivateIpAddress',
        'regionId'                  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->elasticNetworkInterfaceId) {
            $res['ElasticNetworkInterfaceId'] = $this->elasticNetworkInterfaceId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignLeniPrivateIpAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ElasticNetworkInterfaceId'])) {
            $model->elasticNetworkInterfaceId = $map['ElasticNetworkInterfaceId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
