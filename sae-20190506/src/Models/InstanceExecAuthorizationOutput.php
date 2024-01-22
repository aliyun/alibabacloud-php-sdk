<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class InstanceExecAuthorizationOutput extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $authorization;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessKeyId'   => 'accessKeyId',
        'accountId'     => 'accountId',
        'authorization' => 'authorization',
        'date'          => 'date',
        'endpoint'      => 'endpoint',
        'requestId'     => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->authorization) {
            $res['authorization'] = $this->authorization;
        }
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstanceExecAuthorizationOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['authorization'])) {
            $model->authorization = $map['authorization'];
        }
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
