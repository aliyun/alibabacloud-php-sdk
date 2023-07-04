<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class ikeConfig extends Model
{
    /**
     * @description The IKE authentication algorithm.
     *
     * @example sha1
     *
     * @var string
     */
    public $ikeAuthAlg;

    /**
     * @description The IKE encryption algorithm.
     *
     * @example aes
     *
     * @var string
     */
    public $ikeEncAlg;

    /**
     * @description The IKE lifetime. Unit: seconds.
     *
     * @example 86400
     *
     * @var int
     */
    public $ikeLifetime;

    /**
     * @description The IKE negotiation mode. Valid values:
     *
     *   **main:** This mode offers higher security during negotiations.
     *   **aggressive:** This mode is faster and has a higher success rate.
     *
     * @example main
     *
     * @var string
     */
    public $ikeMode;

    /**
     * @description The Diffie-Hellman group.
     *
     * @example group2
     *
     * @var string
     */
    public $ikePfs;

    /**
     * @description The version of the IKE protocol.
     *
     *   **ikev1**
     *   **ikev2**
     *
     * Compared with IKEv1, IKEv2 simplifies the SA negotiation process and is more suitable for scenarios in which multiple CIDR blocks are used.
     * @example ikev1
     *
     * @var string
     */
    public $ikeVersion;

    /**
     * @description The identifier on the VPC side. The default value is the IP address of the VPN gateway. The value can be an FQDN or an IP address.
     *
     * @example 116.64.XX.XX
     *
     * @var string
     */
    public $localId;

    /**
     * @description The pre-shared key.
     *
     * @example pgw6dy7d1i8i****
     *
     * @var string
     */
    public $psk;

    /**
     * @description The identifier on the data center side. The default value is the IP address of the customer gateway. The value can be a fully qualified domain name (FQDN) or an IP address.
     *
     * @example 139.18.XX.XX
     *
     * @var string
     */
    public $remoteId;
    protected $_name = [
        'ikeAuthAlg'  => 'IkeAuthAlg',
        'ikeEncAlg'   => 'IkeEncAlg',
        'ikeLifetime' => 'IkeLifetime',
        'ikeMode'     => 'IkeMode',
        'ikePfs'      => 'IkePfs',
        'ikeVersion'  => 'IkeVersion',
        'localId'     => 'LocalId',
        'psk'         => 'Psk',
        'remoteId'    => 'RemoteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ikeAuthAlg) {
            $res['IkeAuthAlg'] = $this->ikeAuthAlg;
        }
        if (null !== $this->ikeEncAlg) {
            $res['IkeEncAlg'] = $this->ikeEncAlg;
        }
        if (null !== $this->ikeLifetime) {
            $res['IkeLifetime'] = $this->ikeLifetime;
        }
        if (null !== $this->ikeMode) {
            $res['IkeMode'] = $this->ikeMode;
        }
        if (null !== $this->ikePfs) {
            $res['IkePfs'] = $this->ikePfs;
        }
        if (null !== $this->ikeVersion) {
            $res['IkeVersion'] = $this->ikeVersion;
        }
        if (null !== $this->localId) {
            $res['LocalId'] = $this->localId;
        }
        if (null !== $this->psk) {
            $res['Psk'] = $this->psk;
        }
        if (null !== $this->remoteId) {
            $res['RemoteId'] = $this->remoteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ikeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IkeAuthAlg'])) {
            $model->ikeAuthAlg = $map['IkeAuthAlg'];
        }
        if (isset($map['IkeEncAlg'])) {
            $model->ikeEncAlg = $map['IkeEncAlg'];
        }
        if (isset($map['IkeLifetime'])) {
            $model->ikeLifetime = $map['IkeLifetime'];
        }
        if (isset($map['IkeMode'])) {
            $model->ikeMode = $map['IkeMode'];
        }
        if (isset($map['IkePfs'])) {
            $model->ikePfs = $map['IkePfs'];
        }
        if (isset($map['IkeVersion'])) {
            $model->ikeVersion = $map['IkeVersion'];
        }
        if (isset($map['LocalId'])) {
            $model->localId = $map['LocalId'];
        }
        if (isset($map['Psk'])) {
            $model->psk = $map['Psk'];
        }
        if (isset($map['RemoteId'])) {
            $model->remoteId = $map['RemoteId'];
        }

        return $model;
    }
}
