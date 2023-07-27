<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\fault;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\fault\abort\percentage;
use AlibabaCloud\Tea\Model;

class abort extends Model
{
    /**
     * @description The HTTP status code.
     *
     * @example 400
     *
     * @var int
     */
    public $httpStatus;

    /**
     * @description The percentage of requests that are aborted with the specified error code.
     *
     * @var percentage
     */
    public $percentage;
    protected $_name = [
        'httpStatus' => 'HttpStatus',
        'percentage' => 'Percentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpStatus) {
            $res['HttpStatus'] = $this->httpStatus;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = null !== $this->percentage ? $this->percentage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return abort
     */
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
