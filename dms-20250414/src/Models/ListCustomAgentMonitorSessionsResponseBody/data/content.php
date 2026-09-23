<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListCustomAgentMonitorSessionsResponseBody\data;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $creatorUserName;

    /**
     * @var string
     */
    public $customAgentId;

    /**
     * @var int
     */
    public $dislikeCount;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $likeCount;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $turnCount;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'creatorUserName' => 'CreatorUserName',
        'customAgentId' => 'CustomAgentId',
        'dislikeCount' => 'DislikeCount',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'likeCount' => 'LikeCount',
        'sessionId' => 'SessionId',
        'state' => 'State',
        'title' => 'Title',
        'turnCount' => 'TurnCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->creatorUserName) {
            $res['CreatorUserName'] = $this->creatorUserName;
        }

        if (null !== $this->customAgentId) {
            $res['CustomAgentId'] = $this->customAgentId;
        }

        if (null !== $this->dislikeCount) {
            $res['DislikeCount'] = $this->dislikeCount;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->likeCount) {
            $res['LikeCount'] = $this->likeCount;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->turnCount) {
            $res['TurnCount'] = $this->turnCount;
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
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['CreatorUserName'])) {
            $model->creatorUserName = $map['CreatorUserName'];
        }

        if (isset($map['CustomAgentId'])) {
            $model->customAgentId = $map['CustomAgentId'];
        }

        if (isset($map['DislikeCount'])) {
            $model->dislikeCount = $map['DislikeCount'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['LikeCount'])) {
            $model->likeCount = $map['LikeCount'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['TurnCount'])) {
            $model->turnCount = $map['TurnCount'];
        }

        return $model;
    }
}
