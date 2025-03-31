<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\TlsCipherSuitesConfig\tlsCipherSuite;

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

    public function validate()
    {
        if (\is_array($this->tlsCipherSuite)) {
            Model::validateArray($this->tlsCipherSuite);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        if (null !== $this->tlsCipherSuite) {
            if (\is_array($this->tlsCipherSuite)) {
                $res['tlsCipherSuite'] = [];
                $n1 = 0;
                foreach ($this->tlsCipherSuite as $item1) {
                    $res['tlsCipherSuite'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        if (isset($map['tlsCipherSuite'])) {
            if (!empty($map['tlsCipherSuite'])) {
                $model->tlsCipherSuite = [];
                $n1 = 0;
                foreach ($map['tlsCipherSuite'] as $item1) {
                    $model->tlsCipherSuite[$n1++] = tlsCipherSuite::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
