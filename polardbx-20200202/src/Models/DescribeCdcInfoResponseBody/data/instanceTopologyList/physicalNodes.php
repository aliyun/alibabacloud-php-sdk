<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCdcInfoResponseBody\data\instanceTopologyList;

use AlibabaCloud\Tea\Model;

class physicalNodes extends Model
{
    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $AZone;

    /**
     * @example 204800
     *
     * @var int
     */
    public $disk;

    /**
     * @example polarx.x4.large.2e.cdc
     *
     * @var string
     */
    public $nodeClass;

    /**
     * @example ***
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example pxc-c-***
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example ACTIVATION
     *
     * @var string
     */
    public $status;

    /**
     * @example polarx-cdc-kernel-***
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'AZone' => 'AZone',
        'disk' => 'Disk',
        'nodeClass' => 'NodeClass',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'status' => 'Status',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->AZone) {
            $res['AZone'] = $this->AZone;
        }
        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }
        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return physicalNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AZone'])) {
            $model->AZone = $map['AZone'];
        }
        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
