<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateApiDestinationRequest;

use AlibabaCloud\Tea\Model;

class httpApiParameters extends Model
{
    /**
     * @description The endpoint of the API destination. The endpoint can be up to 127 characters in length.
     *
     * @example http://127.0.0.1:8001/api
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The HTTP request method. Valid values:
     *
     *   GET
     *   POST
     *   HEAD
     *   DELETE
     *   PUT
     *   PATCH
     *
     * @example POST
     *
     * @var string
     */
    public $method;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'method'   => 'Method',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return httpApiParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        return $model;
    }
}
