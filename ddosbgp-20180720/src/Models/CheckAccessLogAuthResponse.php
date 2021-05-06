<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class CheckAccessLogAuthResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $accessLogAuth;
    protected $_name = [
        'requestId'     => 'RequestId',
        'accessLogAuth' => 'AccessLogAuth',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('accessLogAuth', $this->accessLogAuth, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->accessLogAuth) {
            $res['AccessLogAuth'] = $this->accessLogAuth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckAccessLogAuthResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccessLogAuth'])) {
            $model->accessLogAuth = $map['AccessLogAuth'];
        }

        return $model;
    }
}
