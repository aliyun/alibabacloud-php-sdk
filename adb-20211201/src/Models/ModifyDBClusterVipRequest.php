<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBClusterVipRequest extends Model
{
    /**
     * @var string
     */
    public $connectString;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $VPCId;
    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'connectString' => 'ConnectString',
        'DBClusterId'   => 'DBClusterId',
        'VPCId'         => 'VPCId',
        'vSwitchId'     => 'VSwitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectString) {
            $res['ConnectString'] = $this->connectString;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['ConnectString'])) {
            $model->connectString = $map['ConnectString'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
