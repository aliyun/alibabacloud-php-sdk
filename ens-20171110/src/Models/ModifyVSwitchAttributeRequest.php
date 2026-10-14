<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ModifyVSwitchAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableIPv6;

    /**
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vSwitchName;
    protected $_name = [
        'description' => 'Description',
        'enableIPv6' => 'EnableIPv6',
        'ipv6CidrBlock' => 'Ipv6CidrBlock',
        'vSwitchId' => 'VSwitchId',
        'vSwitchName' => 'VSwitchName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableIPv6) {
            $res['EnableIPv6'] = $this->enableIPv6;
        }

        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableIPv6'])) {
            $model->enableIPv6 = $map['EnableIPv6'];
        }

        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }

        return $model;
    }
}
