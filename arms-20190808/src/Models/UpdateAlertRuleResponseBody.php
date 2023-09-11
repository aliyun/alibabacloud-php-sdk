<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateAlertRuleResponseBody extends Model
{
    /**
     * @description The ID of the alert rule.
     *
     * @example 1234567
     *
     * @var int
     */
    public $alertId;

    /**
     * @description The struct returned.
     *
     * @example -
     *
     * @var string
     */
    public $data;

    /**
     * @description The ID of the request.
     *
     * @example 6A9AEA84-7186-4D8D-B498-4585C6A2****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertId'   => 'AlertId',
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAlertRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
