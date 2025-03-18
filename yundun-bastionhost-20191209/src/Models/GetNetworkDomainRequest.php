<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class GetNetworkDomainRequest extends Model
{
    /**
     * @description The bastion host ID.
     * > You can call the [DescribeInstances ](https://help.aliyun.com/document_detail/153281.html)operation to query the bastion host ID.
     *
     * This parameter is required.
     *
     * @example bastionhost-cn-i7m2btk6g48
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the network domain to query.
     * > You can call the [ListNetworkDomains ](https://help.aliyun.com/document_detail/2758827.html)operation to query the network domain ID.
     *
     * This parameter is required.
     *
     * @example 3
     *
     * @var string
     */
    public $networkDomainId;

    /**
     * @description The region ID of the bastion host.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'networkDomainId' => 'NetworkDomainId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkDomainId) {
            $res['NetworkDomainId'] = $this->networkDomainId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNetworkDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkDomainId'])) {
            $model->networkDomainId = $map['NetworkDomainId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
