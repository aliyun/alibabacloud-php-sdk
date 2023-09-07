<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeMaskingRulesResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeMaskingRulesResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example pc-bp1s826a1up******
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The result data that is returned.
     *
     * @var data
     */
    public $data;

    /**
     * @description The message that is returned for the request.
     *
     * > If the request is successful, Successful is returned. If the request fails, an error message such as an error code is returned.
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 2F83D131-1C18-4599-889D-729A9D******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid value:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'data'        => 'Data',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
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
     * @return DescribeMaskingRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
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
