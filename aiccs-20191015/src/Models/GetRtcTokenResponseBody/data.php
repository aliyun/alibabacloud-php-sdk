<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetRtcTokenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 139000000
     *
     * @var string
     */
    public $accountName;

    /**
     * @example 200000000*******
     *
     * @var string
     */
    public $rtcId;

    /**
     * @example {“cleansession”:true,”clientId”:”GID_VOIP@@@ClientId_****”,”conferenceTopic”:”cs_alicom_voip_conference”,”host”:”mqtt-cn-4590mdhb901.mqtt.aliyuncs.com”,”meetingEventKeepAliveInterval”:0,”phoneTopic”:”alicom_voip_phone”,”port”:0,”reconnectTimeout”:2000,”registerTime”:0,”sdkClientPort”:8883,”serverId”:”GID_VOIP@@@MTEuMTMuMTM2LjExOA==”,”sgwServerTopic”:”alicom_voip_server_pre”,”tlsport”:443,”tokenData”:”abcdef”,”useTLS”:false}
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'accountName' => 'AccountName',
        'rtcId'       => 'RtcId',
        'token'       => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->rtcId) {
            $res['RtcId'] = $this->rtcId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['RtcId'])) {
            $model->rtcId = $map['RtcId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
