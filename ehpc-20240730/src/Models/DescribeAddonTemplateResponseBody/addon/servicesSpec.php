<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon\servicesSpec\inputParams;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon\servicesSpec\networkACL;

class servicesSpec extends Model
{
    /**
     * @var inputParams[]
     */
    public $inputParams;
    /**
     * @var networkACL[]
     */
    public $networkACL;
    /**
     * @var string
     */
    public $serviceAccessType;
    /**
     * @var string
     */
    public $serviceAccessUrl;
    /**
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
        if (\is_array($this->inputParams)) {
            Model::validateArray($this->inputParams);
        }
        if (\is_array($this->networkACL)) {
            Model::validateArray($this->networkACL);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputParams) {
            if (\is_array($this->inputParams)) {
                $res['InputParams'] = [];
                $n1                 = 0;
                foreach ($this->inputParams as $item1) {
                    $res['InputParams'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->networkACL) {
            if (\is_array($this->networkACL)) {
                $res['NetworkACL'] = [];
                $n1                = 0;
                foreach ($this->networkACL as $item1) {
                    $res['NetworkACL'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputParams'])) {
            if (!empty($map['InputParams'])) {
                $model->inputParams = [];
                $n1                 = 0;
                foreach ($map['InputParams'] as $item1) {
                    $model->inputParams[$n1++] = inputParams::fromMap($item1);
                }
            }
        }

        if (isset($map['NetworkACL'])) {
            if (!empty($map['NetworkACL'])) {
                $model->networkACL = [];
                $n1                = 0;
                foreach ($map['NetworkACL'] as $item1) {
                    $model->networkACL[$n1++] = networkACL::fromMap($item1);
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
