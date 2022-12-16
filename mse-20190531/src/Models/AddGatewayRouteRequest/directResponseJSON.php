<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteRequest;

use AlibabaCloud\Tea\Model;

class directResponseJSON extends Model
{
    /**
     * @description The mock return value.
     *
     * @example hello
     *
     * @var string
     */
    public $body;

    /**
     * @description The mock return code.
     *
     * @example 403
     *
     * @var int
     */
    public $code;
    protected $_name = [
        'body' => 'Body',
        'code' => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return directResponseJSON
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
