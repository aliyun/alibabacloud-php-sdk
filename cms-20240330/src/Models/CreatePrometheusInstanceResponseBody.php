<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class CreatePrometheusInstanceResponseBody extends Model
{
    /**
     * @example rw-abc123
     *
     * @var string
     */
    public $prometheusInstanceId;

    /**
     * @description Id of the request
     *
     * @example 264C3E89-BE6E-5F82-A484-CE9C2196C7DC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'prometheusInstanceId' => 'prometheusInstanceId',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->prometheusInstanceId) {
            $res['prometheusInstanceId'] = $this->prometheusInstanceId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePrometheusInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['prometheusInstanceId'])) {
            $model->prometheusInstanceId = $map['prometheusInstanceId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
