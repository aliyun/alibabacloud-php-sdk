<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\Tea\Model;

class hostAliases extends Model
{
    /**
     * @description The added hostnames.
     *
     * @var string[]
     */
    public $hostnames;

    /**
     * @description The added IP address.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $ip;
    protected $_name = [
        'hostnames' => 'Hostnames',
        'ip' => 'Ip',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostnames) {
            $res['Hostnames'] = $this->hostnames;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostAliases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hostnames'])) {
            if (!empty($map['Hostnames'])) {
                $model->hostnames = $map['Hostnames'];
            }
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
