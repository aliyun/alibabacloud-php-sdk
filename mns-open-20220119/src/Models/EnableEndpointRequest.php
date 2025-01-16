<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class EnableEndpointRequest extends Model
{
    /**
     * @description The type of the endpoint. Valid value:
     *
     *   **public**: indicates a public endpoint. (Only public endpoint is supported.)
     *
     * This parameter is required.
     * @example public
     *
     * @var string
     */
    public $endpointType;
    protected $_name = [
        'endpointType' => 'EndpointType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        return $model;
    }
}
