<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

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
        'maxVersion' => 'MaxVersion',
        'minVersion' => 'MinVersion',
    ];

    public function validate()
    {
        if (\is_array($this->cipherSuites)) {
            Model::validateArray($this->cipherSuites);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cipherSuites) {
            if (\is_array($this->cipherSuites)) {
                $res['CipherSuites'] = [];
                $n1 = 0;
                foreach ($this->cipherSuites as $item1) {
                    $res['CipherSuites'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->maxVersion) {
            $res['MaxVersion'] = $this->maxVersion;
        }

        if (null !== $this->minVersion) {
            $res['MinVersion'] = $this->minVersion;
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
        if (isset($map['CipherSuites'])) {
            if (!empty($map['CipherSuites'])) {
                $model->cipherSuites = [];
                $n1 = 0;
                foreach ($map['CipherSuites'] as $item1) {
                    $model->cipherSuites[$n1++] = $item1;
                }
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
