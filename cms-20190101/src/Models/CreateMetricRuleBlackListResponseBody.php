<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateMetricRuleBlackListResponseBody extends Model
{
    /**
     * @description The effective scope of the blacklist policy. Valid values:
     *
     *   USER: The blacklist policy takes effect only for the current Alibaba Cloud account.
     *
     *   GROUP: The blacklist policy takes effect only for the specified application group. This is the default value.
     *
     * For information about how to obtain the ID of an application group, see [DescribeMonitorGroups](~~115032~~).
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 93514c96-ceb8-47d8-8ee3-93b6d98b****
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the request.
     *
     * @example The request has failed due to a temporary failure of the server.
     *
     * @var string
     */
    public $message;

    /**
     * @description For more information about common request parameters, see [Common parameters](~~199331~~).
     *
     * @example 5C637FA3-3959-3352-8BE6-78CE2ED2D33D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'id'        => 'Id',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return CreateMetricRuleBlackListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
