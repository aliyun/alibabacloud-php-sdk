<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListNodesNoPagingRequest extends Model
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
     * @description The name of the node. You can perform a fuzzy search. MySQL regular expressions are supported.
     *
     * @example Compute0
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The type of the node. Valid values:
     *
     *   Manager: management node
     *   Login: logon node
     *   Compute: compute node
     *
     * Default value: Compute
     * @example Compute
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
     * Default value: Forward
     * @example Forward
     *
     * @var string
     */
    public $sequence;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'hostName'  => 'HostName',
        'role'      => 'Role',
        'sequence'  => 'Sequence',
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
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodesNoPagingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        return $model;
    }
}
