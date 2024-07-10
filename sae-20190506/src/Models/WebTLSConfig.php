<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class WebTLSConfig extends Model
{
    /**
     * @var string[]
     */
    public $cipherSuites;

    /**
     * @var string
     */
    public $maxVersion;

    /**
     * @var string
     */
    public $minVersion;
    protected $_name = [
        'cipherSuites' => 'CipherSuites',
        'maxVersion'   => 'MaxVersion',
        'minVersion'   => 'MinVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cipherSuites) {
            $res['CipherSuites'] = $this->cipherSuites;
        }
        if (null !== $this->maxVersion) {
            $res['MaxVersion'] = $this->maxVersion;
        }
        if (null !== $this->minVersion) {
            $res['MinVersion'] = $this->minVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebTLSConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CipherSuites'])) {
            if (!empty($map['CipherSuites'])) {
                $model->cipherSuites = $map['CipherSuites'];
            }
        }
        if (isset($map['MaxVersion'])) {
            $model->maxVersion = $map['MaxVersion'];
        }
        if (isset($map['MinVersion'])) {
            $model->minVersion = $map['MinVersion'];
        }

        return $model;
    }
}
