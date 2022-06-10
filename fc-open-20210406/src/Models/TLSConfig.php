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
     * @description TLS最大版本号
     *
     * @var string
     */
    public $maxVersion;

    /**
     * @description TLS最小版本号
     *
     * @var string
     */
    public $minVersion;
    protected $_name = [
        'cipherSuites' => 'cipherSuites',
        'maxVersion'   => 'maxVersion',
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
        if (null !== $this->maxVersion) {
            $res['maxVersion'] = $this->maxVersion;
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
        if (isset($map['maxVersion'])) {
            $model->maxVersion = $map['maxVersion'];
        }
        if (isset($map['minVersion'])) {
            $model->minVersion = $map['minVersion'];
        }

        return $model;
    }
}
