<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\tunnelOptionsSpecification\tunnelOptions;

use AlibabaCloud\Tea\Model;

class tunnelIkeConfig extends Model
{
    /**
     * @description IKE阶段认证算法。
     *
     * @example sha1
     *
     * @var string
     */
    public $ikeAuthAlg;

    /**
     * @description IKE阶段加密算法。
     *
     * @example aes
     *
     * @var string
     */
    public $ikeEncAlg;

    /**
     * @description IKE阶段生存时间。单位：秒。
     *
     * @example 86400
     *
     * @var string
     */
    public $ikeLifetime;

    /**
     * @description IKE协商模式。
     *
     * - **main**：主模式，协商过程安全性高。
     * - **aggressive**：野蛮模式，协商快速且协商成功率高。
     * @example main
     *
     * @var string
     */
    public $ikeMode;

    /**
     * @description IKE阶段DH分组。
     *
     * @example group2
     *
     * @var string
     */
    public $ikePfs;

    /**
     * @description IKE协议版本。
     *
     * @example ikev1
     *
     * @var string
     */
    public $ikeVersion;

    /**
     * @description 隧道本端（阿里云侧）的标识。
     *
     * @example 47.21.XX.XX
     *
     * @var string
     */
    public $localId;

    /**
     * @description 预共享密钥。
     *
     * @example 123456****
     *
     * @var string
     */
    public $psk;

    /**
     * @description 隧道对端的标识。
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
