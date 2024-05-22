<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @description The edge application template. The value must be a JSON string that contains the following information:
     *
     *   Basic information such as the name of the application
     *   Information such as resource specifications and network security configurations
     *   Service specifications
     *   Required resources
     *
     * This parameter is required.
     * @example {\\"appMetaData\\":{        \\"appName\\":\\"nginx\\",        \\"clusterName\\":\\"poc\\",        \\"appType\\":\\"Common\\",        \\"description\\":\\"test\\"    },    \\"resourceAttribute\\":{        \\"resourceType\\":\\"\\",        \\"instanceSpec\\":\\"ens.sn1.tiny\\",        \\"systemDiskSize\\":20,        \\"dataDiskSize\\":0,        \\"bandwithOut\\":10,        \\"areaLevel\\":\\"National\\",        \\"netSecurityStrategy\\":null,        \\"initConfig\\":null    },    \\"resourceSelector\\":[        {            \\"count\\":1        }    ],    \\"workload\\":[        {            \\"podCount\\":1,            \\"serviceConfig\\":null,            \\"name\\":\\"nginx\\",            \\"podSpec\\":{                \\"containers\\":[                    {                        \\"name\\":\\"android\\",                        \\"image\\":\\"edge-registry.alicdn.com/test/nginx\\"                    }                ]            },            \\"count\\":1        }    ]}
     *
     * @var string
     */
    public $template;

    /**
     * @description The timeout period for asynchronous processing. Unit: seconds. Default value: 1800.
     *
     * @example 1800
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'template' => 'Template',
        'timeout'  => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
