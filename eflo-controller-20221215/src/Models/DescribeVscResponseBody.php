<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class DescribeVscResponseBody extends Model
{
    /**
     * @description The ID of the compute node in which the VSC resides.
     *
     * @example e01-cn-kvw44e6dn04
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The request ID.
     *
     * @example 4FD06DF0-9167-5C6F-A145-F30CA4A15D54
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource group ID.
     *
     * @example rg-aek2k3rqlvv6ytq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The VSC status.
     *
     * Valid values:
     *
     *   Creating
     *   Normal
     *   Deleting
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The VSC ID.
     *
     * @example vsc-001
     *
     * @var string
     */
    public $vscId;

    /**
     * @description The custom name of the VSC.
     *
     * @example test_name
     *
     * @var string
     */
    public $vscName;

    /**
     * @description The VSC type.
     *
     * @example primary
     *
     * @var string
     */
    public $vscType;
    protected $_name = [
        'nodeId' => 'NodeId',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'vscId' => 'VscId',
        'vscName' => 'VscName',
        'vscType' => 'VscType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vscId) {
            $res['VscId'] = $this->vscId;
        }
        if (null !== $this->vscName) {
            $res['VscName'] = $this->vscName;
        }
        if (null !== $this->vscType) {
            $res['VscType'] = $this->vscType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVscResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VscId'])) {
            $model->vscId = $map['VscId'];
        }
        if (isset($map['VscName'])) {
            $model->vscName = $map['VscName'];
        }
        if (isset($map['VscType'])) {
            $model->vscType = $map['VscType'];
        }

        return $model;
    }
}
