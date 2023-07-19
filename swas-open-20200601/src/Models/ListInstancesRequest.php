<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @description The billing method of the simple application server. Set the value to PrePaid, which indicates the subscription billing method. Only the subscription billing method is supported.
     *
     * Default value: PrePaid.
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The IDs of the simple application servers. The value can be a JSON array that consists of up to 100 simple application server IDs. Separate the server IDs with commas (,).
     *
     * >  If you specify both `InstanceIds` and `PublicIpAddresses`, make sure that each specified ID and its corresponding public IP address belong to the same simple application server. Otherwise, an empty result is returned.
     * @example ["2ad1ae67295445f598017499dc****", "2ad1ae67295445f598017123dc****"]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: 100.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The public IP addresses of the simple application servers. The value can be a JSON array that consists of up to 100 IP addresses. Separate the IP addresses with commas (,).
     *
     * >  If you specify both `InstanceIds` and `PublicIpAddresses`, make sure that each specified ID and its corresponding public IP address belong to the same simple application server. Otherwise, an empty result is returned.
     * @example ["42.1.**.**", "42.2.**.**"]
     *
     * @var string
     */
    public $publicIpAddresses;

    /**
     * @description The region ID of the simple application servers.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'chargeType'        => 'ChargeType',
        'instanceIds'       => 'InstanceIds',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'publicIpAddresses' => 'PublicIpAddresses',
        'regionId'          => 'RegionId',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->publicIpAddresses) {
            $res['PublicIpAddresses'] = $this->publicIpAddresses;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PublicIpAddresses'])) {
            $model->publicIpAddresses = $map['PublicIpAddresses'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
