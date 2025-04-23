<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest;

use AlibabaCloud\Dara\Model;

class winAdPar extends Model
{
    /**
     * @var string
     */
    public $adDc;

    /**
     * @var string
     */
    public $adIp;

    /**
     * @var string
     */
    public $adUser;

    /**
     * @var string
     */
    public $adUserPasswd;
    protected $_name = [
        'adDc' => 'AdDc',
        'adIp' => 'AdIp',
        'adUser' => 'AdUser',
        'adUserPasswd' => 'AdUserPasswd',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
