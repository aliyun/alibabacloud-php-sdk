<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data;

use AlibabaCloud\Dara\Model;

class directResponse extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'body' => 'Body',
        'code' => 'Code',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
