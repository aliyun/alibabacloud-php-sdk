<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponseBody\ipsecServers;

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
     **main**: This mode offers higher security during negotiations.
     *
     * @example main
     *
     * @var string
     */
    public $ikeMode;

    /**
     * @description The Diffie-Hellman key exchange algorithm.
     *
     * @example group2
     *
     * @var string
     */
    public $ikePfs;

    /**
     * @description The IKE version.
     *
     * @example ikev2
     *
     * @var string
     */
    public $ikeVersion;

    /**
     * @description The ID of the IPsec server. The default value is the public IP address of the VPN gateway. Both FQDNs and IP addresses are supported.
     *
     * @example 116.64.XX.XX
     *
     * @var string
     */
    public $localId;

    /**
     * @description The identifier of the customer gateway. Both fully qualified domain names (FQDNs) and IP addresses are supported. By default, this parameter is empty.
     *
     * @example 139.67.XX.XX
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
        if (isset($map['RemoteId'])) {
            $model->remoteId = $map['RemoteId'];
        }

        return $model;
    }
}
