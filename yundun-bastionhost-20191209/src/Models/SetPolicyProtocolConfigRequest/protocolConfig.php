<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyProtocolConfigRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyProtocolConfigRequest\protocolConfig\RDP;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyProtocolConfigRequest\protocolConfig\SSH;

class protocolConfig extends Model
{
    /**
     * @var RDP
     */
    public $RDP;

    /**
     * @var SSH
     */
    public $SSH;
    protected $_name = [
        'RDP' => 'RDP',
        'SSH' => 'SSH',
    ];

    public function validate()
    {
        if (null !== $this->RDP) {
            $this->RDP->validate();
        }
        if (null !== $this->SSH) {
            $this->SSH->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->RDP) {
            $res['RDP'] = null !== $this->RDP ? $this->RDP->toArray($noStream) : $this->RDP;
        }

        if (null !== $this->SSH) {
            $res['SSH'] = null !== $this->SSH ? $this->SSH->toArray($noStream) : $this->SSH;
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
        if (isset($map['RDP'])) {
            $model->RDP = RDP::fromMap($map['RDP']);
        }

        if (isset($map['SSH'])) {
            $model->SSH = SSH::fromMap($map['SSH']);
        }

        return $model;
    }
}
