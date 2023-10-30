<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListHostsRequest extends Model
{
    /**
     * @description The address of the host that you want to query. You can set this parameter to a domain name or an IP address. Only exact match is supported.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The ID of the host group to which the host to be queried belongs.
     *
     * > You can call the [ListHostGroups](~~201307~~) operation to query the ID of the host group.
     * @example 1
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @description The name of the host that you want to query. Only exact match is supported.
     *
     * @example host
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the bastion host on which you want to query hosts.
     *
     * > You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The operating system of the host that you want to query. Valid values:
     *
     *   **Linux**
     *   **Windows**
     *
     * @example Linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region ID of the bastion host on which you want to query hosts.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The source of the host that you want to query. Valid values:
     *
     *   **Local**: a host in a data center
     *   **Ecs**: an Elastic Compute Service (ECS) instance
     *   **Rds**: a host in an ApsaraDB MyBase dedicated cluster
     *
     * @example Local
     *
     * @var string
     */
    public $source;

    /**
     * @description The ID of the ECS instance or the host in an ApsaraDB MyBase dedicated cluster that you want to query. Only exact match is supported.
     *
     * @example i-bp19ienyt0yax748****
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @description The status of the host that you want to query. Valid values:
     *
     *   **Normal**: normal
     *   **Release**: released
     *
     * @example Normal
     *
     * @var string
     */
    public $sourceInstanceState;
    protected $_name = [
        'hostAddress'         => 'HostAddress',
        'hostGroupId'         => 'HostGroupId',
        'hostName'            => 'HostName',
        'instanceId'          => 'InstanceId',
        'OSType'              => 'OSType',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'regionId'            => 'RegionId',
        'source'              => 'Source',
        'sourceInstanceId'    => 'SourceInstanceId',
        'sourceInstanceState' => 'SourceInstanceState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
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
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->sourceInstanceState) {
            $res['SourceInstanceState'] = $this->sourceInstanceState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['SourceInstanceState'])) {
            $model->sourceInstanceState = $map['SourceInstanceState'];
        }

        return $model;
    }
}
