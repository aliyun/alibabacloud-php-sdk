<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayDomainDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class tlsCipherSuitesConfig extends Model
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

    public function validate()
    {
        if (\is_array($this->tlsCipherSuites)) {
            Model::validateArray($this->tlsCipherSuites);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->tlsCipherSuites) {
            if (\is_array($this->tlsCipherSuites)) {
                $res['TlsCipherSuites'] = [];
                $n1 = 0;
                foreach ($this->tlsCipherSuites as $item1) {
                    $res['TlsCipherSuites'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['TlsCipherSuites'])) {
            if (!empty($map['TlsCipherSuites'])) {
                $model->tlsCipherSuites = [];
                $n1 = 0;
                foreach ($map['TlsCipherSuites'] as $item1) {
                    $model->tlsCipherSuites[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
