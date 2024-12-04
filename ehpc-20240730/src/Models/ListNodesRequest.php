<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class ListNodesRequest extends Model
{
    /**
     * @description The cluster ID. You can call the [ListClusters](https://help.aliyun.com/document_detail/87116.html) operation to query the cluster ID.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The hostnames of the compute nodes that you want to query.
     *
     * @var string[]
     */
    public $hostnames;

    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The IP addresses of the compute nodes that you want to query.
     *
     * @var string[]
     */
    public $privateIpAddress;

    /**
     * @description The queues to which the nodes belong.
     *
     * @var string[]
     */
    public $queueNames;

    /**
     * @description Specifies whether the results are sorted in ascending or descending order. Valid values:
     *
     *   Forward: ascending
     *   Backward: descending
     *
     * Default value: Forward.
     * @example Forward
     *
     * @var string
     */
    public $sequence;

    /**
     * @description The sorting method of the node list. Valid values:
     *
     *   AddedTime: sorts the nodes by the time that they were added.
     *   HostName: sorts the nodes by their hostnames.
     *
     * Default value: addedtime.
     * @example AddedTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The states of the compute nodes to be queried.
     *
     * @var string[]
     */
    public $status;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'hostnames'        => 'Hostnames',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'privateIpAddress' => 'PrivateIpAddress',
        'queueNames'       => 'QueueNames',
        'sequence'         => 'Sequence',
        'sortBy'           => 'SortBy',
        'status'           => 'Status',
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
        if (null !== $this->hostnames) {
            $res['Hostnames'] = $this->hostnames;
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
        if (null !== $this->queueNames) {
            $res['QueueNames'] = $this->queueNames;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Hostnames'])) {
            if (!empty($map['Hostnames'])) {
                $model->hostnames = $map['Hostnames'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrivateIpAddress'])) {
            if (!empty($map['PrivateIpAddress'])) {
                $model->privateIpAddress = $map['PrivateIpAddress'];
            }
        }
        if (isset($map['QueueNames'])) {
            if (!empty($map['QueueNames'])) {
                $model->queueNames = $map['QueueNames'];
            }
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
        }

        return $model;
    }
}
