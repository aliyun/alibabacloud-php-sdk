<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class TLSConfig extends Model
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
        'cipherSuites' => 'cipherSuites',
        'maxVersion' => 'maxVersion',
        'minVersion' => 'minVersion',
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
                $res['cipherSuites'] = [];
                $n1 = 0;
                foreach ($this->cipherSuites as $item1) {
                    $res['cipherSuites'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxVersion) {
            $res['maxVersion'] = $this->maxVersion;
        }

        if (null !== $this->minVersion) {
            $res['minVersion'] = $this->minVersion;
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
        if (isset($map['cipherSuites'])) {
            if (!empty($map['cipherSuites'])) {
                $model->cipherSuites = [];
                $n1 = 0;
                foreach ($map['cipherSuites'] as $item1) {
                    $model->cipherSuites[$n1] = $item1;
                    ++$n1;
                }
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
