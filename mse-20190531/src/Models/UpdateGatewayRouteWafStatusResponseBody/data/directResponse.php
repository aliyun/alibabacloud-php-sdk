<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data;

use AlibabaCloud\Tea\Model;

class directResponse extends Model
{
    /**
     * @description The mock return value.
     *
     * @example [{\"key\":\"h68d13466.sqa.eu95\",\"dims\":\"groupName=All
     *
     * @var string
     */
    public $body;

    /**
     * @description The status code returned.
     *
     * @example 200
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
     * @return directResponse
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
