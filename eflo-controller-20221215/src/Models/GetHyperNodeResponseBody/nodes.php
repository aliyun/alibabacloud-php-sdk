<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\GetHyperNodeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\GetHyperNodeResponseBody\nodes\disks;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\GetHyperNodeResponseBody\nodes\networks;

class nodes extends Model
{
    /**
     * @var disks[]
     */
    public $disks;

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
    public $imageName;

    /**
     * @var networks
     */
    public $networks;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'disks' => 'Disks',
        'hostname' => 'Hostname',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'networks' => 'Networks',
        'nodeId' => 'NodeId',
        'status' => 'Status',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (\is_array($this->disks)) {
            Model::validateArray($this->disks);
        }
        if (null !== $this->networks) {
            $this->networks->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disks) {
            if (\is_array($this->disks)) {
                $res['Disks'] = [];
                $n1 = 0;
                foreach ($this->disks as $item1) {
                    $res['Disks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->networks) {
            $res['Networks'] = null !== $this->networks ? $this->networks->toArray($noStream) : $this->networks;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n1 = 0;
                foreach ($map['Disks'] as $item1) {
                    $model->disks[$n1] = disks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['Networks'])) {
            $model->networks = networks::fromMap($map['Networks']);
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
