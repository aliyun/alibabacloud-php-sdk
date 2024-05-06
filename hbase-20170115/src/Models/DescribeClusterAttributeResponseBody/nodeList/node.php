<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\nodeList;

use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\nodeList\node\daemonList;
use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @var daemonList
     */
    public $daemonList;

    /**
     * @var string
     */
    public $memStore;

    /**
     * @var string
     */
    public $nodeDiskQuantity;

    /**
     * @var string
     */
    public $nodeDiskSize;

    /**
     * @var string
     */
    public $nodeDiskType;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeInstanceType;

    /**
     * @var string
     */
    public $nodeStatus;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $regionQuantity;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $storeFile;
    protected $_name = [
        'daemonList'       => 'DaemonList',
        'memStore'         => 'MemStore',
        'nodeDiskQuantity' => 'NodeDiskQuantity',
        'nodeDiskSize'     => 'NodeDiskSize',
        'nodeDiskType'     => 'NodeDiskType',
        'nodeId'           => 'NodeId',
        'nodeInstanceType' => 'NodeInstanceType',
        'nodeStatus'       => 'NodeStatus',
        'nodeType'         => 'NodeType',
        'regionQuantity'   => 'RegionQuantity',
        'serviceType'      => 'ServiceType',
        'storeFile'        => 'StoreFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->daemonList) {
            $res['DaemonList'] = null !== $this->daemonList ? $this->daemonList->toMap() : null;
        }
        if (null !== $this->memStore) {
            $res['MemStore'] = $this->memStore;
        }
        if (null !== $this->nodeDiskQuantity) {
            $res['NodeDiskQuantity'] = $this->nodeDiskQuantity;
        }
        if (null !== $this->nodeDiskSize) {
            $res['NodeDiskSize'] = $this->nodeDiskSize;
        }
        if (null !== $this->nodeDiskType) {
            $res['NodeDiskType'] = $this->nodeDiskType;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeInstanceType) {
            $res['NodeInstanceType'] = $this->nodeInstanceType;
        }
        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->regionQuantity) {
            $res['RegionQuantity'] = $this->regionQuantity;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->storeFile) {
            $res['StoreFile'] = $this->storeFile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DaemonList'])) {
            $model->daemonList = daemonList::fromMap($map['DaemonList']);
        }
        if (isset($map['MemStore'])) {
            $model->memStore = $map['MemStore'];
        }
        if (isset($map['NodeDiskQuantity'])) {
            $model->nodeDiskQuantity = $map['NodeDiskQuantity'];
        }
        if (isset($map['NodeDiskSize'])) {
            $model->nodeDiskSize = $map['NodeDiskSize'];
        }
        if (isset($map['NodeDiskType'])) {
            $model->nodeDiskType = $map['NodeDiskType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeInstanceType'])) {
            $model->nodeInstanceType = $map['NodeInstanceType'];
        }
        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['RegionQuantity'])) {
            $model->regionQuantity = $map['RegionQuantity'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['StoreFile'])) {
            $model->storeFile = $map['StoreFile'];
        }

        return $model;
    }
}
