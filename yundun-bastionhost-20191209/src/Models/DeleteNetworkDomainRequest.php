<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkDomainRequest extends Model
{
    /**
     * @description The ID of the bastion host whose network domain you want to delete.
     *
     * This parameter is required.
     * @example bastionhost_std_intl-sg-uq833e2dz02
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the network domain to be deleted.
     *
     * This parameter is required.
     * @example 2
     *
     * @var string
     */
    public $networkDomainId;

    /**
     * @description The region ID of the bastion host whose network domain you want to delete.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'networkDomainId' => 'NetworkDomainId',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

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
     * @return DeleteNetworkDomainRequest
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
