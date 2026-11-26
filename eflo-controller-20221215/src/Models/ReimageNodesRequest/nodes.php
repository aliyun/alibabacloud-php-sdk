<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ReimageNodesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ReimageNodesRequest\nodes\systemDisk;

class nodes extends Model
{
    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $loginPassword;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var systemDisk
     */
    public $systemDisk;
    protected $_name = [
        'hostname' => 'Hostname',
        'imageId' => 'ImageId',
        'loginPassword' => 'LoginPassword',
        'nodeId' => 'NodeId',
        'systemDisk' => 'SystemDisk',
    ];

    public function validate()
    {
        if (null !== $this->systemDisk) {
            $this->systemDisk->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->loginPassword) {
            $res['LoginPassword'] = $this->loginPassword;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toArray($noStream) : $this->systemDisk;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['LoginPassword'])) {
            $model->loginPassword = $map['LoginPassword'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }

        return $model;
    }
}
