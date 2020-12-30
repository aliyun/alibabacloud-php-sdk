<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody;

use AlibabaCloud\Tea\Model;

class ikeConfig extends Model
{
    /**
     * @var string
     */
    public $remoteId;

    /**
     * @var int
     */
    public $ikeLifetime;

    /**
     * @var string
     */
    public $ikeEncAlg;

    /**
     * @var string
     */
    public $localId;

    /**
     * @var string
     */
    public $ikeMode;

    /**
     * @var string
     */
    public $ikeVersion;

    /**
     * @var string
     */
    public $ikePfs;

    /**
     * @var string
     */
    public $psk;

    /**
     * @var string
     */
    public $ikeAuthAlg;
    protected $_name = [
        'remoteId'    => 'RemoteId',
        'ikeLifetime' => 'IkeLifetime',
        'ikeEncAlg'   => 'IkeEncAlg',
        'localId'     => 'LocalId',
        'ikeMode'     => 'IkeMode',
        'ikeVersion'  => 'IkeVersion',
        'ikePfs'      => 'IkePfs',
        'psk'         => 'Psk',
        'ikeAuthAlg'  => 'IkeAuthAlg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remoteId) {
            $res['RemoteId'] = $this->remoteId;
        }
        if (null !== $this->ikeLifetime) {
            $res['IkeLifetime'] = $this->ikeLifetime;
        }
        if (null !== $this->ikeEncAlg) {
            $res['IkeEncAlg'] = $this->ikeEncAlg;
        }
        if (null !== $this->localId) {
            $res['LocalId'] = $this->localId;
        }
        if (null !== $this->ikeMode) {
            $res['IkeMode'] = $this->ikeMode;
        }
        if (null !== $this->ikeVersion) {
            $res['IkeVersion'] = $this->ikeVersion;
        }
        if (null !== $this->ikePfs) {
            $res['IkePfs'] = $this->ikePfs;
        }
        if (null !== $this->psk) {
            $res['Psk'] = $this->psk;
        }
        if (null !== $this->ikeAuthAlg) {
            $res['IkeAuthAlg'] = $this->ikeAuthAlg;
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
        if (isset($map['RemoteId'])) {
            $model->remoteId = $map['RemoteId'];
        }
        if (isset($map['IkeLifetime'])) {
            $model->ikeLifetime = $map['IkeLifetime'];
        }
        if (isset($map['IkeEncAlg'])) {
            $model->ikeEncAlg = $map['IkeEncAlg'];
        }
        if (isset($map['LocalId'])) {
            $model->localId = $map['LocalId'];
        }
        if (isset($map['IkeMode'])) {
            $model->ikeMode = $map['IkeMode'];
        }
        if (isset($map['IkeVersion'])) {
            $model->ikeVersion = $map['IkeVersion'];
        }
        if (isset($map['IkePfs'])) {
            $model->ikePfs = $map['IkePfs'];
        }
        if (isset($map['Psk'])) {
            $model->psk = $map['Psk'];
        }
        if (isset($map['IkeAuthAlg'])) {
            $model->ikeAuthAlg = $map['IkeAuthAlg'];
        }

        return $model;
    }
}
