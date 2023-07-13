<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest;

use AlibabaCloud\Tea\Model;

class winAdPar extends Model
{
    /**
     * @description The name of the AD domain.
     *
     * @example ad-hybrid001.ehpcad.com
     *
     * @var string
     */
    public $adDc;

    /**
     * @description The IP address of the AD domain.
     *
     * @example 192.168.1.2
     *
     * @var string
     */
    public $adIp;

    /**
     * @description The AD user.
     *
     * @example Administrator
     *
     * @var string
     */
    public $adUser;

    /**
     * @description The password of the AD user.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $adUserPasswd;
    protected $_name = [
        'adDc'         => 'AdDc',
        'adIp'         => 'AdIp',
        'adUser'       => 'AdUser',
        'adUserPasswd' => 'AdUserPasswd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adDc) {
            $res['AdDc'] = $this->adDc;
        }
        if (null !== $this->adIp) {
            $res['AdIp'] = $this->adIp;
        }
        if (null !== $this->adUser) {
            $res['AdUser'] = $this->adUser;
        }
        if (null !== $this->adUserPasswd) {
            $res['AdUserPasswd'] = $this->adUserPasswd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return winAdPar
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdDc'])) {
            $model->adDc = $map['AdDc'];
        }
        if (isset($map['AdIp'])) {
            $model->adIp = $map['AdIp'];
        }
        if (isset($map['AdUser'])) {
            $model->adUser = $map['AdUser'];
        }
        if (isset($map['AdUserPasswd'])) {
            $model->adUserPasswd = $map['AdUserPasswd'];
        }

        return $model;
    }
}
