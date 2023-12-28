<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody;

use AlibabaCloud\Tea\Model;

class callInfo extends Model
{
    /**
     * @description App ID。
     *
     * @example 0rbd****
     *
     * @var string
     */
    public $appId;

    /**
     * @example IN
     *
     * @var string
     */
    public $callStatus;

    /**
     * @example 311
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1620957905
     *
     * @var int
     */
    public $createdTs;

    /**
     * @example 1620958150
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @example 100
     *
     * @var int
     */
    public $duration;
    protected $_name = [
        'appId'       => 'AppId',
        'callStatus'  => 'CallStatus',
        'channelId'   => 'ChannelId',
        'createdTs'   => 'CreatedTs',
        'destroyedTs' => 'DestroyedTs',
        'duration'    => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->callStatus) {
            $res['CallStatus'] = $this->callStatus;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CallStatus'])) {
            $model->callStatus = $map['CallStatus'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
