<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class ListElasticNetworkInterfacesRequest extends Model
{
    /**
     * @description Lingjun Elastic Network Interface ID
     *
     * @example leni-1234****
     *
     * @var string
     */
    public $elasticNetworkInterfaceId;

    /**
     * @description The IP address of the BE cluster.
     *
     * @example 10.0.0.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description The network type.
     *
     * Valid value:
     *
     *   Tenant: Tenant.
     *   VPC
     *
     * @example tenant
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The ID of the node.
     *
     * @example e01-cn-lbj3aej****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The page number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 20.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the enterprise-level snapshot policy.
     *
     * Valid value:
     *
     *   Create Failed: the creation failure.
     *   Delete Failed: the that failed to be deleted.
     *   Executing
     *   Available: The template is available.
     *   Deleting
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the variable.
     *
     * Valid value:
     *
     *   CUSTOM: custom type.
     *   DEFAULT: system type.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $type;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-uf6u8473r84e9****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-uf6aa4ddo97fr****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'elasticNetworkInterfaceId' => 'ElasticNetworkInterfaceId',
        'ip'                        => 'Ip',
        'networkType'               => 'NetworkType',
        'nodeId'                    => 'NodeId',
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'regionId'                  => 'RegionId',
        'status'                    => 'Status',
        'type'                      => 'Type',
        'vSwitchId'                 => 'VSwitchId',
        'vpcId'                     => 'VpcId',
        'zoneId'                    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticNetworkInterfaceId) {
            $res['ElasticNetworkInterfaceId'] = $this->elasticNetworkInterfaceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListElasticNetworkInterfacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticNetworkInterfaceId'])) {
            $model->elasticNetworkInterfaceId = $map['ElasticNetworkInterfaceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
