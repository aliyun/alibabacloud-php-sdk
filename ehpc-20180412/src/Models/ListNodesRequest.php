<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListNodesRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The filter options of the node list.
     *
     * Format: {"status":"node_status"}. Replace node_status with the node status. Valid values of node_status:
     *
     *   uninit: The node is being installed.
     *   exception: An exception occurred on the node.
     *   running: The node is running.
     *   initing: The node is being initialized.
     *   releasing: The node is being released.
     *   untracking: The node is not added to the cluster.
     *   stopped: The node is stopped.
     *
     * @example {"status":"running"}
     *
     * @var string
     */
    public $filter;

    /**
     * @description The name of the node. You can perform a fuzzy search. MySQL regular expressions are supported.
     *
     * @example test-HostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The prefix of the hostname. You can query nodes that have a specified prefix.
     *
     * @example compute
     *
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @description The suffix of the hostname. You can query nodes that have a specified suffix.
     *
     * @example 01
     *
     * @var string
     */
    public $hostNameSuffix;

    /**
     * @description The number of the page to return. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 100.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The private IP address of the node.
     *
     * @example 172.16.**.**
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The type of the node. Valid values:
     *
     *   Manager: management node
     *   Login: logon node
     *   Compute: compute node
     *
     * @example Manager
     *
     * @var string
     */
    public $role;

    /**
     * @description The sorting method of the node list. Valid values:
     *
     *   Forward: sorts the nodes in chronological order.
     *   Backward: sorts the nodes in reverse chronological order.
     *
     * >  This parameter is used together with the SortBy parameter. If you set SortBy to AddedTime and set Sequence to Forward, nodes are queried in ascending order of time that they are added.
     * @example Forward
     *
     * @var string
     */
    public $sequence;

    /**
     * @description The sorting method of the node list. Valid values:
     *
     *   AddedTime: sorts the nodes by the time that they are added.
     *   HostName: sorts the nodes by their host names.
     *
     * @example AddedTime
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'filter'           => 'Filter',
        'hostName'         => 'HostName',
        'hostNamePrefix'   => 'HostNamePrefix',
        'hostNameSuffix'   => 'HostNameSuffix',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'privateIpAddress' => 'PrivateIpAddress',
        'role'             => 'Role',
        'sequence'         => 'Sequence',
        'sortBy'           => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hostNamePrefix) {
            $res['HostNamePrefix'] = $this->hostNamePrefix;
        }
        if (null !== $this->hostNameSuffix) {
            $res['HostNameSuffix'] = $this->hostNameSuffix;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HostNamePrefix'])) {
            $model->hostNamePrefix = $map['HostNamePrefix'];
        }
        if (isset($map['HostNameSuffix'])) {
            $model->hostNameSuffix = $map['HostNameSuffix'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
