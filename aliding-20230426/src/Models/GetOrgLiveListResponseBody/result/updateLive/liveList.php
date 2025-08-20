<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListResponseBody\result\updateLive;

use AlibabaCloud\Dara\Model;

class liveList extends Model
{
    /**
     * @var string
     */
    public $anchorNickname;

    /**
     * @var string
     */
    public $anchorUnionId;

    /**
     * @var string
     */
    public $anchorUnionIdInAlibaba;

    /**
     * @var string
     */
    public $anchorUserId;

    /**
     * @var int
     */
    public $liveEndTime;

    /**
     * @var int
     */
    public $liveStartTime;

    /**
     * @var string
     */
    public $liveUuid;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'anchorNickname' => 'AnchorNickname',
        'anchorUnionId' => 'AnchorUnionId',
        'anchorUnionIdInAlibaba' => 'AnchorUnionIdInAlibaba',
        'anchorUserId' => 'AnchorUserId',
        'liveEndTime' => 'LiveEndTime',
        'liveStartTime' => 'LiveStartTime',
        'liveUuid' => 'LiveUuid',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anchorNickname) {
            $res['AnchorNickname'] = $this->anchorNickname;
        }

        if (null !== $this->anchorUnionId) {
            $res['AnchorUnionId'] = $this->anchorUnionId;
        }

        if (null !== $this->anchorUnionIdInAlibaba) {
            $res['AnchorUnionIdInAlibaba'] = $this->anchorUnionIdInAlibaba;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnchorNickname'])) {
            $model->anchorNickname = $map['AnchorNickname'];
        }

        if (isset($map['AnchorUnionId'])) {
            $model->anchorUnionId = $map['AnchorUnionId'];
        }

        if (isset($map['AnchorUnionIdInAlibaba'])) {
            $model->anchorUnionIdInAlibaba = $map['AnchorUnionIdInAlibaba'];
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
