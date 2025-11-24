<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\fault;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\fault\abort\percentage;

class abort extends Model
{
    /**
     * @var int
     */
    public $httpStatus;

    /**
     * @var percentage
     */
    public $percentage;
    protected $_name = [
        'httpStatus' => 'HttpStatus',
        'percentage' => 'Percentage',
    ];

    public function validate()
    {
        if (null !== $this->percentage) {
            $this->percentage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->httpStatus) {
            $res['HttpStatus'] = $this->httpStatus;
        }

        if (null !== $this->percentage) {
            $res['Percentage'] = null !== $this->percentage ? $this->percentage->toArray($noStream) : $this->percentage;
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
        if (isset($map['HttpStatus'])) {
            $model->httpStatus = $map['HttpStatus'];
        }

        if (isset($map['Percentage'])) {
            $model->percentage = percentage::fromMap($map['Percentage']);
        }

        return $model;
    }
}
