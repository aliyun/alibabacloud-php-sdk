<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetOutAccountBindDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $bindStatus;

    /**
     * @var string
     */
    public $outAccountId;

    /**
     * @var string
     */
    public $outAccountType;

    /**
     * @var string
     */
    public $token;

    /**
     * @var int
     */
    public $tokenExpireTime;
    protected $_name = [
        'bindStatus'      => 'BindStatus',
        'outAccountId'    => 'OutAccountId',
        'outAccountType'  => 'OutAccountType',
        'token'           => 'Token',
        'tokenExpireTime' => 'TokenExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindStatus) {
            $res['BindStatus'] = $this->bindStatus;
        }
        if (null !== $this->outAccountId) {
            $res['OutAccountId'] = $this->outAccountId;
        }
        if (null !== $this->outAccountType) {
            $res['OutAccountType'] = $this->outAccountType;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->tokenExpireTime) {
            $res['TokenExpireTime'] = $this->tokenExpireTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindStatus'])) {
            $model->bindStatus = $map['BindStatus'];
        }
        if (isset($map['OutAccountId'])) {
            $model->outAccountId = $map['OutAccountId'];
        }
        if (isset($map['OutAccountType'])) {
            $model->outAccountType = $map['OutAccountType'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['TokenExpireTime'])) {
            $model->tokenExpireTime = $map['TokenExpireTime'];
        }

        return $model;
    }
}
