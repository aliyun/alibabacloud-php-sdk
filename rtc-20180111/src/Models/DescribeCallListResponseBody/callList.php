<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallListResponseBody;

use AlibabaCloud\Dara\Model;

class callList extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var int
     */
    public $badExpUserCnt;
    /**
     * @var string
     */
    public $callStatus;
    /**
     * @var string
     */
    public $channelId;
    /**
     * @var int
     */
    public $createdTs;
    /**
     * @var int
     */
    public $destroyedTs;
    /**
     * @var int
     */
    public $duration;
    /**
     * @var int
     */
    public $userCnt;
    protected $_name = [
        'appId'         => 'AppId',
        'badExpUserCnt' => 'BadExpUserCnt',
        'callStatus'    => 'CallStatus',
        'channelId'     => 'ChannelId',
        'createdTs'     => 'CreatedTs',
        'destroyedTs'   => 'DestroyedTs',
        'duration'      => 'Duration',
        'userCnt'       => 'UserCnt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->badExpUserCnt) {
            $res['BadExpUserCnt'] = $this->badExpUserCnt;
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

        if (null !== $this->userCnt) {
            $res['UserCnt'] = $this->userCnt;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['BadExpUserCnt'])) {
            $model->badExpUserCnt = $map['BadExpUserCnt'];
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

        if (isset($map['UserCnt'])) {
            $model->userCnt = $map['UserCnt'];
        }

        return $model;
    }
}
