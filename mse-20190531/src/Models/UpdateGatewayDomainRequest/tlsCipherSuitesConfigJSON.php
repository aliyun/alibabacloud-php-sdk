<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayDomainRequest;

use AlibabaCloud\Tea\Model;

class tlsCipherSuitesConfigJSON extends Model
{
    /**
     * @var string
     */
    public $configType;

    /**
     * @var string[]
     */
    public $tlsCipherSuites;
    protected $_name = [
        'configType' => 'ConfigType',
        'tlsCipherSuites' => 'TlsCipherSuites',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->tlsCipherSuites) {
            $res['TlsCipherSuites'] = $this->tlsCipherSuites;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tlsCipherSuitesConfigJSON
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['TlsCipherSuites'])) {
            if (!empty($map['TlsCipherSuites'])) {
                $model->tlsCipherSuites = $map['TlsCipherSuites'];
            }
        }

        return $model;
    }
}
