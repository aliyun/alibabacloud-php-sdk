<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain\cloudNativeInstances;

use AlibabaCloud\Tea\Model;

class protocolPortConfigs extends Model
{
    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $ports;
    protected $_name = [
        'protocol' => 'Protocol',
        'ports'    => 'Ports',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protocolPortConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Ports'])) {
            $model->ports = $map['Ports'];
        }

        return $model;
    }
}
