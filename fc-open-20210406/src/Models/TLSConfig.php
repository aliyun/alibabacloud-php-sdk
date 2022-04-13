<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class TLSConfig extends Model
{
    /**
     * @description TLS加密套件列表
     *
     * @var string[]
     */
    public $cipherSuites;

    /**
     * @description TLS最小版本号
     *
     * @var string
     */
    public $minVersion;
    protected $_name = [
        'cipherSuites' => 'cipherSuites',
        'minVersion'   => 'minVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cipherSuites) {
            $res['cipherSuites'] = $this->cipherSuites;
        }
        if (null !== $this->minVersion) {
            $res['minVersion'] = $this->minVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TLSConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cipherSuites'])) {
            if (!empty($map['cipherSuites'])) {
                $model->cipherSuites = $map['cipherSuites'];
            }
        }
        if (isset($map['minVersion'])) {
            $model->minVersion = $map['minVersion'];
        }

        return $model;
    }
}
