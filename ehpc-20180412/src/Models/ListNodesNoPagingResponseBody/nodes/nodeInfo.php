<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesNoPagingResponseBody\nodes;

use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @description The name of the node.
     *
     * @example compute0
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the node.
     *
     * @example i-bp13p7vlcb1uihfv****
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the image.
     *
     * @example centos_7_02_64_20G_alibase_20170818****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The instance type of the node.
     *
     * @example ecs.n1.tiny
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The status of the node. Valid values:
     *
     *   uninit: The node is being installed.
     *   exception: An exception has occurred on the node.
     *   running: The node is running.
     *   initing: The node is being initialized.
     *   releasing: The node is being released.
     *   untracking: The node is not added to the cluster.
     *   stopped: The node is stopped.
     *
     * @example untracking
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'hostName'     => 'HostName',
        'id'           => 'Id',
        'imageId'      => 'ImageId',
        'instanceType' => 'InstanceType',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
