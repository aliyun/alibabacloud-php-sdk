<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class EndpointStatusDetail extends Model
{
    /**
     * @example { 	"slot-j6co2fcd": {   	"Ip": "10.0.0.2", 		"Port": 7001 	}, 	"slot-asdgys4d": {   	"Ip": "10.0.0.3", 		"Port": 7002 	} }
     *
     * @var IpPort[]
     */
    public $ipPortMapping;
    protected $_name = [
        'ipPortMapping' => 'IpPortMapping',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipPortMapping) {
            $res['IpPortMapping'] = [];
            if (null !== $this->ipPortMapping && \is_array($this->ipPortMapping)) {
                foreach ($this->ipPortMapping as $key => $val) {
                    $res['IpPortMapping'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EndpointStatusDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpPortMapping'])) {
            $model->ipPortMapping = $map['IpPortMapping'];
        }

        return $model;
    }
}
