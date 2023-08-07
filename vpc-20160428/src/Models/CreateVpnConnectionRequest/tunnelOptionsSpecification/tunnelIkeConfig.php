<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionRequest\tunnelOptionsSpecification;

use AlibabaCloud\Tea\Model;

class tunnelIkeConfig extends Model
{
    /**
     * @description 第一阶段协商的认证算法。
     *
     * <props="intl"><ph>取值：**md5**、**sha1**、**sha256**、**sha384**、**sha512**。默认值：**md5**。</ph></props>
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
     * @description 第一阶段协商的加密算法。
     *
     * <props="intl"><ph>取值：**aes**、**aes192**、**aes256**、**des**或**3des**。默认值：**aes**。 </ph></props>
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
     * @description 第一阶段协商出的SA的生存周期。单位：秒。
     *
     * 取值范围：**0**~**86400**。默认值：**86400**。
     * @example 86400
     *
     * @var int
     */
    public $ikeLifetime;

    /**
     * @description IKE版本的协商模式。取值：**main**或**aggressive**。默认值：**main**。
     *
     * - **main**：主模式，协商过程安全性高。
     * - **aggressive**：野蛮模式，协商快速且协商成功率高。
     *
     * <props="china"><ph>如果VPN网关实例类型为国密型，则协商模式仅支持**main**。</ph></props>
     * @example main
     *
     * @var string
     */
    public $ikeMode;

    /**
     * @description 第一阶段协商使用的Diffie-Hellman密钥交换算法。默认值：**group2**。
     * 取值：**group1**、**group2**、**group5**、**group14**。
     * @example group2
     *
     * @var string
     */
    public $ikePfs;

    /**
     * @description IKE协议的版本。取值：**ikev1**或**ikev2**。默认值：**ikev1**。
     *
     * 相对于IKEv1版本，IKEv2版本简化了SA的协商过程并且对于多网段的场景提供了更好的支持。
     *
     * <props="china"><ph>如果VPN网关实例类型为国密型，则IKE版本仅支持**ikev1**。</ph></props>
     * @example ikev1
     *
     * @var string
     */
    public $ikeVersion;

    /**
     * @description 隧道本端（阿里云侧）的标识，用于第一阶段的协商。长度限制为100个字符。默认值为隧道的IP地址。
     *
     **LocalId**支持FQDN格式，如果您使用FQDN格式，协商模式建议选择为**aggressive**（野蛮模式）。
     *
     * @example 47.21.XX.XX
     *
     * @var string
     */
    public $localId;

    /**
     * @description 预共享密钥，用于隧道与隧道对端之间的身份认证。
     *
     * - 密钥长度为1~100个字符，支持数字、大小写英文字母以及以下字符。```~!\`@#$%^&*()_-+={}[]|;:\",.<>/?```
     * > 隧道及隧道对端的预共享密钥需一致，否则系统无法正常建立隧道。
     * @example 123456****
     *
     * @var string
     */
    public $psk;

    /**
     * @description 隧道对端的标识，用于第一阶段的协商。长度限制为100个字符。默认值为隧道关联的用户网关的IP地址。
     *
     **RemoteId**支持FQDN格式，如果您使用FQDN格式，协商模式建议选择为**aggressive**（野蛮模式）。
     *
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
