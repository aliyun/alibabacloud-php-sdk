<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class PmsEventReportRequest extends Model
{
    /**
     * @var string
     */
    public $payload;
    protected $_name = [
        'payload' => 'Payload',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PmsEventReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }

        return $model;
    }
}
