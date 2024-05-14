<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain\cloudNativeInstances;

use AlibabaCloud\Tea\Model;

class protocolPortConfigs extends Model
{
    /**
     * @example [80]
     *
     * @var int[]
     */
    public $ports;

    /**
     * @example http
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'ports'    => 'Ports',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = $map['Ports'];
            }
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
