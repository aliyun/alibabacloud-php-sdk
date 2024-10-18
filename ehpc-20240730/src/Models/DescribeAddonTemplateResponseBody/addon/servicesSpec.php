<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon;

use AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon\servicesSpec\inputParams;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon\servicesSpec\networkACL;
use AlibabaCloud\Tea\Model;

class servicesSpec extends Model
{
    /**
     * @description The parameter configurations of the service.
     *
     * @var inputParams[]
     */
    public $inputParams;

    /**
     * @description The security group configurations of the service.
     *
     * @var networkACL[]
     */
    public $networkACL;

    /**
     * @description The service access type.
     *
     * @example URL
     *
     * @var string
     */
    public $serviceAccessType;

    /**
     * @description The service access URL.
     *
     * @example https://47.96.xx.xx:12008
     *
     * @var string
     */
    public $serviceAccessUrl;

    /**
     * @description The service name.
     *
     * This parameter is required.
     * @example Web Portal
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'inputParams'       => 'InputParams',
        'networkACL'        => 'NetworkACL',
        'serviceAccessType' => 'ServiceAccessType',
        'serviceAccessUrl'  => 'ServiceAccessUrl',
        'serviceName'       => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputParams) {
            $res['InputParams'] = [];
            if (null !== $this->inputParams && \is_array($this->inputParams)) {
                $n = 0;
                foreach ($this->inputParams as $item) {
                    $res['InputParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkACL) {
            $res['NetworkACL'] = [];
            if (null !== $this->networkACL && \is_array($this->networkACL)) {
                $n = 0;
                foreach ($this->networkACL as $item) {
                    $res['NetworkACL'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceAccessType) {
            $res['ServiceAccessType'] = $this->serviceAccessType;
        }
        if (null !== $this->serviceAccessUrl) {
            $res['ServiceAccessUrl'] = $this->serviceAccessUrl;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return servicesSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputParams'])) {
            if (!empty($map['InputParams'])) {
                $model->inputParams = [];
                $n                  = 0;
                foreach ($map['InputParams'] as $item) {
                    $model->inputParams[$n++] = null !== $item ? inputParams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NetworkACL'])) {
            if (!empty($map['NetworkACL'])) {
                $model->networkACL = [];
                $n                 = 0;
                foreach ($map['NetworkACL'] as $item) {
                    $model->networkACL[$n++] = null !== $item ? networkACL::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceAccessType'])) {
            $model->serviceAccessType = $map['ServiceAccessType'];
        }
        if (isset($map['ServiceAccessUrl'])) {
            $model->serviceAccessUrl = $map['ServiceAccessUrl'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
