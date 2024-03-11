<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallListResponseBody;

use AlibabaCloud\Tea\Model;

class callList extends Model
{
    /**
     * @description App ID。
     *
     * @example 9qb1****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 0
     *
     * @var int
     */
    public $badExpUserCnt;

    /**
     * @example OUT
     *
     * @var string
     */
    public $callStatus;

    /**
     * @example 904
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1615885823
     *
     * @var int
     */
    public $createdTs;

    /**
     * @example 1615886028
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @example 205
     *
     * @var int
     */
    public $duration;

    /**
     * @example 2
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return callList
     */
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
