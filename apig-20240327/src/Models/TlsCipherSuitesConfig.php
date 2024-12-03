<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\TlsCipherSuitesConfig\cipherSuites;
use AlibabaCloud\Tea\Model;

class TlsCipherSuitesConfig extends Model
{
    /**
     * @var cipherSuites[]
     */
    public $cipherSuites;

    /**
     * @var string
     */
    public $configType;
    protected $_name = [
        'cipherSuites' => 'cipherSuites',
        'configType'   => 'configType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cipherSuites) {
            $res['cipherSuites'] = [];
            if (null !== $this->cipherSuites && \is_array($this->cipherSuites)) {
                $n = 0;
                foreach ($this->cipherSuites as $item) {
                    $res['cipherSuites'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TlsCipherSuitesConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cipherSuites'])) {
            if (!empty($map['cipherSuites'])) {
                $model->cipherSuites = [];
                $n                   = 0;
                foreach ($map['cipherSuites'] as $item) {
                    $model->cipherSuites[$n++] = null !== $item ? cipherSuites::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        return $model;
    }
}
