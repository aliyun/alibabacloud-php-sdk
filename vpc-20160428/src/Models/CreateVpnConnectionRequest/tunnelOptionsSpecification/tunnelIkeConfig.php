<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionRequest\tunnelOptionsSpecification;

use AlibabaCloud\Tea\Model;

class tunnelIkeConfig extends Model
{
    /**
     * @description The authentication algorithm that is used in Phase 1 negotiations.
     *
     * <props="intl"><ph>Valid values: **md5**, **sha1**, **sha256**, **sha384**, **sha512**. Default value: **md5**. </ph></props>
     *
     * <props="china"><ph>如果VPN网关实例类型为普通型，则取值：**md5**、**sha1**、**sha256**、**sha384**、**sha512**。默认值：**md5**。</ph></props>
     *
     * <props="china"><ph>如果VPN网关实例类型为国密型，则取值为**sm3**（默认值）。</ph></props>
     * @example md5
     *
     * @var string
     */
    public $ikeAuthAlg;

    /**
     * @description The encryption algorithm that is used in Phase 1 negotiations.
     *
     * <props="intl"><ph>Valid values: **aes**, **aes192**, **aes256**, **des**, **3des**. Default value: **aes**. </ph></props>
     *
     * <props="china"><ph>如果VPN网关实例类型为普通型，则取值为**aes**、**aes192**、**aes256**、**des**或**3des**。默认值：**aes**。</ph></props>
     *
     * <props="china"><ph>如果VPN网关实例类型为国密型，则取值为**sm4**（默认值）。</ph></props>
     * @example aes
     *
     * @var string
     */
    public $ikeEncAlg;

    /**
     * @description The SA lifetime that is determined by Phase 1 negotiations. Unit: seconds.
     *
     * Valid values: **0** to **86400**. Default value: **86400**.
     * @example 86400
     *
     * @var int
     */
    public $ikeLifetime;

    /**
     * @description The IKE negotiation mode. Valid values: **main** and **aggressive**. Default value: **main**.
     *
     * - **main**: This mode offers higher security during negotiations.
     * - **aggressive**: This mode is faster and has a higher success rate.
     *
     * <props="china"><ph>如果VPN网关实例类型为国密型，则协商模式仅支持**main**。</ph></props>
     * @example main
     *
     * @var string
     */
    public $ikeMode;

    /**
     * @description The Diffie-Hellman key exchange algorithm that is used in Phase 1 negotiations.
     * Default value: **group2**. Valid values: **group1**, **group2**, **group5**, and **group14**.
     * @example group2
     *
     * @var string
     */
    public $ikePfs;

    /**
     * @description The IKE version. Valid values: **ikev1** and **ikev2**. Default value: **ikev1**.
     * Compared with IKEv1, IKEv2 simplifies the SA negotiation process and is more suitable for scenarios in which multiple CIDR blocks are used.
     *
     * <props="china"><ph>如果VPN网关实例类型为国密型，则IKE版本仅支持**ikev1**。</ph></props>
     * @example ikev1
     *
     * @var string
     */
    public $ikeVersion;

    /**
     * @description The identifier on the Alibaba Cloud side, which is used in Phase 1 negotiations.
     * The description can be up to 100 characters in length. The default identifier is the tunnel IP address.
     * You can set **LocalId** to a fully qualified domain name (FQDN). In this case, we recommend that you set Negotiation Mode to **aggressive**.
     * @example 47.21.XX.XX
     *
     * @var string
     */
    public $localId;

    /**
     * @description The pre-shared key, which is used for identity authentication between the tunnel and the tunnel peer.
     *
     * - The key must be 1 to 100 characters in length and can contain digits, letters, and the following characters: ```~!\`@#$%^&*()_-+={}[]|;:\",.<>/?```
     * > Make sure that the tunnel and peer use the same pre-shared key. Otherwise, tunnel communication cannot be established.
     * @example 123456****
     *
     * @var string
     */
    public $psk;

    /**
     * @description The identifier of the tunnel peer, which is used in Phase 1 negotiations.
     * The description can be up to 100 characters in length. The default identifier is the IP address of the customer gateway.
     * You can set **RemoteId** to an FQDN. In this case, we recommend that you set Negotiation Mode to **aggressive**.
     * @example 47.42.XX.XX
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
     * @return tunnelIkeConfig
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
