<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetRtcTokenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description token信息
     *
     * @var string
     */
    public $token;

    /**
     * @description rtcId
     *
     * @var string
     */
    public $rtcId;

    /**
     * @description 账号名
     *
     * @var string
     */
    public $accountName;
    protected $_name = [
        'token'       => 'Token',
        'rtcId'       => 'RtcId',
        'accountName' => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->rtcId) {
            $res['RtcId'] = $this->rtcId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['RtcId'])) {
            $model->rtcId = $map['RtcId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
