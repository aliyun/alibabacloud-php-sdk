<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\TlsCipherSuitesConfig\tlsCipherSuite;
use AlibabaCloud\Tea\Model;

class TlsCipherSuitesConfig extends Model
{
    /**
     * @var string
     */
    public $configType;

    /**
     * @var tlsCipherSuite[]
     */
    public $tlsCipherSuite;
    protected $_name = [
        'configType' => 'configType',
        'tlsCipherSuite' => 'tlsCipherSuite',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }
        if (null !== $this->tlsCipherSuite) {
            $res['tlsCipherSuite'] = [];
            if (null !== $this->tlsCipherSuite && \is_array($this->tlsCipherSuite)) {
                $n = 0;
                foreach ($this->tlsCipherSuite as $item) {
                    $res['tlsCipherSuite'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }
        if (isset($map['tlsCipherSuite'])) {
            if (!empty($map['tlsCipherSuite'])) {
                $model->tlsCipherSuite = [];
                $n = 0;
                foreach ($map['tlsCipherSuite'] as $item) {
                    $model->tlsCipherSuite[$n++] = null !== $item ? tlsCipherSuite::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
