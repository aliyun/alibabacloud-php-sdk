<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateSignatureResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 300
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 124325213125435
     *
     * @var string
     */
    public $rtcAppId;

    /**
     * @var string
     */
    public $rtcBizName;

    /**
     * @var string
     */
    public $rtcSign;

    /**
     * @example my_workspace
     *
     * @var string
     */
    public $rtcWorkspaceId;
    protected $_name = [
        'expireTime'     => 'ExpireTime',
        'rtcAppId'       => 'RtcAppId',
        'rtcBizName'     => 'RtcBizName',
        'rtcSign'        => 'RtcSign',
        'rtcWorkspaceId' => 'RtcWorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->rtcAppId) {
            $res['RtcAppId'] = $this->rtcAppId;
        }
        if (null !== $this->rtcBizName) {
            $res['RtcBizName'] = $this->rtcBizName;
        }
        if (null !== $this->rtcSign) {
            $res['RtcSign'] = $this->rtcSign;
        }
        if (null !== $this->rtcWorkspaceId) {
            $res['RtcWorkspaceId'] = $this->rtcWorkspaceId;
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['RtcAppId'])) {
            $model->rtcAppId = $map['RtcAppId'];
        }
        if (isset($map['RtcBizName'])) {
            $model->rtcBizName = $map['RtcBizName'];
        }
        if (isset($map['RtcSign'])) {
            $model->rtcSign = $map['RtcSign'];
        }
        if (isset($map['RtcWorkspaceId'])) {
            $model->rtcWorkspaceId = $map['RtcWorkspaceId'];
        }

        return $model;
    }
}
