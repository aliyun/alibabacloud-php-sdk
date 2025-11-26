<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DeployInstanceSDGShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deploymentType;

    /**
     * @var string
     */
    public $diskAccessProtocol;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @var string
     */
    public $SDGId;
    protected $_name = [
        'deploymentType' => 'DeploymentType',
        'diskAccessProtocol' => 'DiskAccessProtocol',
        'diskType' => 'DiskType',
        'instanceIdsShrink' => 'InstanceIds',
        'SDGId' => 'SDGId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentType) {
            $res['DeploymentType'] = $this->deploymentType;
        }

        if (null !== $this->diskAccessProtocol) {
            $res['DiskAccessProtocol'] = $this->diskAccessProtocol;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }

        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
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
        if (isset($map['DeploymentType'])) {
            $model->deploymentType = $map['DeploymentType'];
        }

        if (isset($map['DiskAccessProtocol'])) {
            $model->diskAccessProtocol = $map['DiskAccessProtocol'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        return $model;
    }
}
