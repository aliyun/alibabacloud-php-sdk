<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetGatewayApiResponseBody\api;

use AlibabaCloud\Dara\Model;

class limitRule extends Model
{
    /**
     * @var string
     */
    public $defaultResponse;

    /**
     * @var float
     */
    public $limit;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'defaultResponse' => 'DefaultResponse',
        'limit' => 'Limit',
        'mode' => 'Mode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultResponse) {
            $res['DefaultResponse'] = $this->defaultResponse;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
        if (isset($map['DefaultResponse'])) {
            $model->defaultResponse = $map['DefaultResponse'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
