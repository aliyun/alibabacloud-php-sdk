<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatIpResponseBody;

use AlibabaCloud\Dara\Model;

class natIps extends Model
{
    /**
     * @var string
     */
    public $ipv4Prefix;

    /**
     * @var string
     */
    public $natIp;

    /**
     * @var string
     */
    public $natIpId;
    protected $_name = [
        'ipv4Prefix' => 'Ipv4Prefix',
        'natIp' => 'NatIp',
        'natIpId' => 'NatIpId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4Prefix) {
            $res['Ipv4Prefix'] = $this->ipv4Prefix;
        }

        if (null !== $this->natIp) {
            $res['NatIp'] = $this->natIp;
        }

        if (null !== $this->natIpId) {
            $res['NatIpId'] = $this->natIpId;
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
        if (isset($map['Ipv4Prefix'])) {
            $model->ipv4Prefix = $map['Ipv4Prefix'];
        }

        if (isset($map['NatIp'])) {
            $model->natIp = $map['NatIp'];
        }

        if (isset($map['NatIpId'])) {
            $model->natIpId = $map['NatIpId'];
        }

        return $model;
    }
}
