<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListResponseBody\result\updateLive;

use AlibabaCloud\Tea\Model;

class liveList extends Model
{
    /**
     * @example nickName
     *
     * @var string
     */
    public $anchorNickname;

    /**
     * @var string
     */
    public $anchorUnionId;

    /**
     * @example 012345
     *
     * @var string
     */
    public $anchorUserId;

    /**
     * @example 1398324600000
     *
     * @var int
     */
    public $liveEndTime;

    /**
     * @example 1398321600000
     *
     * @var int
     */
    public $liveStartTime;

    /**
     * @example 4d38xxxxx
     *
     * @var string
     */
    public $liveUuid;

    /**
     * @example 直播标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'anchorNickname' => 'AnchorNickname',
        'anchorUnionId' => 'AnchorUnionId',
        'anchorUserId' => 'AnchorUserId',
        'liveEndTime' => 'LiveEndTime',
        'liveStartTime' => 'LiveStartTime',
        'liveUuid' => 'LiveUuid',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->anchorNickname) {
            $res['AnchorNickname'] = $this->anchorNickname;
        }
        if (null !== $this->anchorUnionId) {
            $res['AnchorUnionId'] = $this->anchorUnionId;
        }
        if (null !== $this->anchorUserId) {
            $res['AnchorUserId'] = $this->anchorUserId;
        }
        if (null !== $this->liveEndTime) {
            $res['LiveEndTime'] = $this->liveEndTime;
        }
        if (null !== $this->liveStartTime) {
            $res['LiveStartTime'] = $this->liveStartTime;
        }
        if (null !== $this->liveUuid) {
            $res['LiveUuid'] = $this->liveUuid;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnchorNickname'])) {
            $model->anchorNickname = $map['AnchorNickname'];
        }
        if (isset($map['AnchorUnionId'])) {
            $model->anchorUnionId = $map['AnchorUnionId'];
        }
        if (isset($map['AnchorUserId'])) {
            $model->anchorUserId = $map['AnchorUserId'];
        }
        if (isset($map['LiveEndTime'])) {
            $model->liveEndTime = $map['LiveEndTime'];
        }
        if (isset($map['LiveStartTime'])) {
            $model->liveStartTime = $map['LiveStartTime'];
        }
        if (isset($map['LiveUuid'])) {
            $model->liveUuid = $map['LiveUuid'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
