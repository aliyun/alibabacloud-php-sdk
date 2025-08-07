<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAbnormalsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $abnormalEventNumber;

    /**
     * @var string
     */
    public $abnormalId;

    /**
     * @var string
     */
    public $abnormalInfo;

    /**
     * @var string
     */
    public $abnormalLevel;

    /**
     * @var string
     */
    public $abnormalTag;

    /**
     * @var string
     */
    public $abnromalStatus;

    /**
     * @var string
     */
    public $apiFormat;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiTag;

    /**
     * @var int
     */
    public $discoverTime;

    /**
     * @var string[]
     */
    public $examples;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var int
     */
    public $follow;

    /**
     * @var int
     */
    public $ignoreTime;

    /**
     * @var int
     */
    public $lastestTime;

    /**
     * @var int
     */
    public $latestDiscoverTime;

    /**
     * @var string
     */
    public $matchedHost;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'abnormalEventNumber' => 'AbnormalEventNumber',
        'abnormalId' => 'AbnormalId',
        'abnormalInfo' => 'AbnormalInfo',
        'abnormalLevel' => 'AbnormalLevel',
        'abnormalTag' => 'AbnormalTag',
        'abnromalStatus' => 'AbnromalStatus',
        'apiFormat' => 'ApiFormat',
        'apiId' => 'ApiId',
        'apiTag' => 'ApiTag',
        'discoverTime' => 'DiscoverTime',
        'examples' => 'Examples',
        'firstTime' => 'FirstTime',
        'follow' => 'Follow',
        'ignoreTime' => 'IgnoreTime',
        'lastestTime' => 'LastestTime',
        'latestDiscoverTime' => 'LatestDiscoverTime',
        'matchedHost' => 'MatchedHost',
        'note' => 'Note',
        'origin' => 'Origin',
        'userStatus' => 'UserStatus',
    ];

    public function validate()
    {
        if (\is_array($this->examples)) {
            Model::validateArray($this->examples);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalEventNumber) {
            $res['AbnormalEventNumber'] = $this->abnormalEventNumber;
        }

        if (null !== $this->abnormalId) {
            $res['AbnormalId'] = $this->abnormalId;
        }

        if (null !== $this->abnormalInfo) {
            $res['AbnormalInfo'] = $this->abnormalInfo;
        }

        if (null !== $this->abnormalLevel) {
            $res['AbnormalLevel'] = $this->abnormalLevel;
        }

        if (null !== $this->abnormalTag) {
            $res['AbnormalTag'] = $this->abnormalTag;
        }

        if (null !== $this->abnromalStatus) {
            $res['AbnromalStatus'] = $this->abnromalStatus;
        }

        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }

        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->apiTag) {
            $res['ApiTag'] = $this->apiTag;
        }

        if (null !== $this->discoverTime) {
            $res['DiscoverTime'] = $this->discoverTime;
        }

        if (null !== $this->examples) {
            if (\is_array($this->examples)) {
                $res['Examples'] = [];
                $n1 = 0;
                foreach ($this->examples as $item1) {
                    $res['Examples'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->follow) {
            $res['Follow'] = $this->follow;
        }

        if (null !== $this->ignoreTime) {
            $res['IgnoreTime'] = $this->ignoreTime;
        }

        if (null !== $this->lastestTime) {
            $res['LastestTime'] = $this->lastestTime;
        }

        if (null !== $this->latestDiscoverTime) {
            $res['LatestDiscoverTime'] = $this->latestDiscoverTime;
        }

        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }

        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
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
        if (isset($map['AbnormalEventNumber'])) {
            $model->abnormalEventNumber = $map['AbnormalEventNumber'];
        }

        if (isset($map['AbnormalId'])) {
            $model->abnormalId = $map['AbnormalId'];
        }

        if (isset($map['AbnormalInfo'])) {
            $model->abnormalInfo = $map['AbnormalInfo'];
        }

        if (isset($map['AbnormalLevel'])) {
            $model->abnormalLevel = $map['AbnormalLevel'];
        }

        if (isset($map['AbnormalTag'])) {
            $model->abnormalTag = $map['AbnormalTag'];
        }

        if (isset($map['AbnromalStatus'])) {
            $model->abnromalStatus = $map['AbnromalStatus'];
        }

        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }

        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ApiTag'])) {
            $model->apiTag = $map['ApiTag'];
        }

        if (isset($map['DiscoverTime'])) {
            $model->discoverTime = $map['DiscoverTime'];
        }

        if (isset($map['Examples'])) {
            if (!empty($map['Examples'])) {
                $model->examples = [];
                $n1 = 0;
                foreach ($map['Examples'] as $item1) {
                    $model->examples[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['Follow'])) {
            $model->follow = $map['Follow'];
        }

        if (isset($map['IgnoreTime'])) {
            $model->ignoreTime = $map['IgnoreTime'];
        }

        if (isset($map['LastestTime'])) {
            $model->lastestTime = $map['LastestTime'];
        }

        if (isset($map['LatestDiscoverTime'])) {
            $model->latestDiscoverTime = $map['LatestDiscoverTime'];
        }

        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }

        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
