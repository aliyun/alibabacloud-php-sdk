<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetGovernanceKubernetesClusterResponseBody extends Model
{
    /**
     * @description The details of the data.
     *
     * @var data
     */
    public $data;

    /**
     * @description The message returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 5B170A0D-2C5D-4CF8-B808-03966B86****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   `true`: The request was successful.
     *   `false`: The request failed.
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGovernanceKubernetesClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
