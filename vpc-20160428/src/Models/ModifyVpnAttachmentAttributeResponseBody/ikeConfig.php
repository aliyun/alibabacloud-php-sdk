<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class ikeConfig extends Model
{
    /**
     * @description The authentication algorithm that was used in Phase 1 negotiations.
     *
     * @example sha1
     *
     * @var string
     */
    public $ikeAuthAlg;

    /**
     * @description The encryption algorithm that was used in Phase 1 negotiations.
     *
     * @example aes
     *
     * @var string
     */
    public $ikeEncAlg;

    /**
     * @description The SA lifetime that was determined by Phase 1 negotiations. Unit: seconds.
     *
     * @example 86400
     *
     * @var int
     */
    public $ikeLifetime;

    /**
     * @description The negotiation mode.
     *
     * @example main
     *
     * @var string
     */
    public $ikeMode;

    /**
     * @description The Diffie-Hellman key exchange algorithm that was used in Phase 1 negotiations.
     *
     * @example group2
     *
     * @var string
     */
    public $ikePfs;

    /**
     * @description The version of the IKE protocol.
     *
     * @example ikev1
     *
     * @var string
     */
    public $ikeVersion;

    /**
     * @description The identifier on the Alibaba Cloud side.
     *
     * @example 47.XX.XX.1
     *
     * @var string
     */
    public $localId;

    /**
     * @description The pre-shared key that was used for identity authentication between the VPN gateway and the data center.
     *
     * >  The pre-shared key of the IPsec-VPN connection must be the same as the authentication key of the data center. Otherwise, you cannot establish a connection between the data center and the VPN gateway.
     * @example 1234***
     *
     * @var string
     */
    public $psk;

    /**
     * @description The identifier on the data center side.
     *
     * @example 47.XX.XX.2
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
