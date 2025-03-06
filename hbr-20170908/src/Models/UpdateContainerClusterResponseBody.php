<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UpdateContainerClusterResponseBody extends Model
{
    /**
     * @description Return code, 200 indicates success.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description Return information.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description Request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates if the request was successful.
     *
     * - false: Failure
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description Cluster token, used for registering HBR clients within the cluster.
     *
     * @example eyJhY2NvdW*****VnZpgXQC5A==
     *
     * @var string
     */
    public $token;

    /**
     * @description Indicates whether the cluster token has been updated.
     *
     * @example false
     *
     * @var bool
     */
    public $tokenUpdated;
    protected $_name = [
        'code'         => 'Code',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'token'        => 'Token',
        'tokenUpdated' => 'TokenUpdated',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->tokenUpdated) {
            $res['TokenUpdated'] = $this->tokenUpdated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateContainerClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['TokenUpdated'])) {
            $model->tokenUpdated = $map['TokenUpdated'];
        }

        return $model;
    }
}
