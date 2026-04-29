<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetQueueResponseBody\data;

use AlibabaCloud\Dara\Model;

class queue extends Model
{
    /**
     * @var int
     */
    public $announcePosition;

    /**
     * @var int
     */
    public $announcePositionFrequency;

    /**
     * @var int
     */
    public $announcePositionParam;

    /**
     * @var int
     */
    public $announcePositionYouarenext;

    /**
     * @var int
     */
    public $announceSound;

    /**
     * @var string
     */
    public $announceSoundFile;

    /**
     * @var int
     */
    public $announceSoundFrequency;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $joinEmpty;

    /**
     * @var int
     */
    public $maxLen;

    /**
     * @var int
     */
    public $memberTimeout;

    /**
     * @var string
     */
    public $musicClass;

    /**
     * @var string
     */
    public $qno;

    /**
     * @var int
     */
    public $queueTimeout;

    /**
     * @var int
     */
    public $retry;

    /**
     * @var bool
     */
    public $sayAgentno;

    /**
     * @var int
     */
    public $serviceLevel;

    /**
     * @var string
     */
    public $strategy;

    /**
     * @var int
     */
    public $vipSupport;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var int
     */
    public $wrapupTime;
    protected $_name = [
        'announcePosition' => 'AnnouncePosition',
        'announcePositionFrequency' => 'AnnouncePositionFrequency',
        'announcePositionParam' => 'AnnouncePositionParam',
        'announcePositionYouarenext' => 'AnnouncePositionYouarenext',
        'announceSound' => 'AnnounceSound',
        'announceSoundFile' => 'AnnounceSoundFile',
        'announceSoundFrequency' => 'AnnounceSoundFrequency',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'enterpriseId' => 'EnterpriseId',
        'id' => 'Id',
        'joinEmpty' => 'JoinEmpty',
        'maxLen' => 'MaxLen',
        'memberTimeout' => 'MemberTimeout',
        'musicClass' => 'MusicClass',
        'qno' => 'Qno',
        'queueTimeout' => 'QueueTimeout',
        'retry' => 'Retry',
        'sayAgentno' => 'SayAgentno',
        'serviceLevel' => 'ServiceLevel',
        'strategy' => 'Strategy',
        'vipSupport' => 'VipSupport',
        'weight' => 'Weight',
        'wrapupTime' => 'WrapupTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->announcePosition) {
            $res['AnnouncePosition'] = $this->announcePosition;
        }

        if (null !== $this->announcePositionFrequency) {
            $res['AnnouncePositionFrequency'] = $this->announcePositionFrequency;
        }

        if (null !== $this->announcePositionParam) {
            $res['AnnouncePositionParam'] = $this->announcePositionParam;
        }

        if (null !== $this->announcePositionYouarenext) {
            $res['AnnouncePositionYouarenext'] = $this->announcePositionYouarenext;
        }

        if (null !== $this->announceSound) {
            $res['AnnounceSound'] = $this->announceSound;
        }

        if (null !== $this->announceSoundFile) {
            $res['AnnounceSoundFile'] = $this->announceSoundFile;
        }

        if (null !== $this->announceSoundFrequency) {
            $res['AnnounceSoundFrequency'] = $this->announceSoundFrequency;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->joinEmpty) {
            $res['JoinEmpty'] = $this->joinEmpty;
        }

        if (null !== $this->maxLen) {
            $res['MaxLen'] = $this->maxLen;
        }

        if (null !== $this->memberTimeout) {
            $res['MemberTimeout'] = $this->memberTimeout;
        }

        if (null !== $this->musicClass) {
            $res['MusicClass'] = $this->musicClass;
        }

        if (null !== $this->qno) {
            $res['Qno'] = $this->qno;
        }

        if (null !== $this->queueTimeout) {
            $res['QueueTimeout'] = $this->queueTimeout;
        }

        if (null !== $this->retry) {
            $res['Retry'] = $this->retry;
        }

        if (null !== $this->sayAgentno) {
            $res['SayAgentno'] = $this->sayAgentno;
        }

        if (null !== $this->serviceLevel) {
            $res['ServiceLevel'] = $this->serviceLevel;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }

        if (null !== $this->vipSupport) {
            $res['VipSupport'] = $this->vipSupport;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        if (null !== $this->wrapupTime) {
            $res['WrapupTime'] = $this->wrapupTime;
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
        if (isset($map['AnnouncePosition'])) {
            $model->announcePosition = $map['AnnouncePosition'];
        }

        if (isset($map['AnnouncePositionFrequency'])) {
            $model->announcePositionFrequency = $map['AnnouncePositionFrequency'];
        }

        if (isset($map['AnnouncePositionParam'])) {
            $model->announcePositionParam = $map['AnnouncePositionParam'];
        }

        if (isset($map['AnnouncePositionYouarenext'])) {
            $model->announcePositionYouarenext = $map['AnnouncePositionYouarenext'];
        }

        if (isset($map['AnnounceSound'])) {
            $model->announceSound = $map['AnnounceSound'];
        }

        if (isset($map['AnnounceSoundFile'])) {
            $model->announceSoundFile = $map['AnnounceSoundFile'];
        }

        if (isset($map['AnnounceSoundFrequency'])) {
            $model->announceSoundFrequency = $map['AnnounceSoundFrequency'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['JoinEmpty'])) {
            $model->joinEmpty = $map['JoinEmpty'];
        }

        if (isset($map['MaxLen'])) {
            $model->maxLen = $map['MaxLen'];
        }

        if (isset($map['MemberTimeout'])) {
            $model->memberTimeout = $map['MemberTimeout'];
        }

        if (isset($map['MusicClass'])) {
            $model->musicClass = $map['MusicClass'];
        }

        if (isset($map['Qno'])) {
            $model->qno = $map['Qno'];
        }

        if (isset($map['QueueTimeout'])) {
            $model->queueTimeout = $map['QueueTimeout'];
        }

        if (isset($map['Retry'])) {
            $model->retry = $map['Retry'];
        }

        if (isset($map['SayAgentno'])) {
            $model->sayAgentno = $map['SayAgentno'];
        }

        if (isset($map['ServiceLevel'])) {
            $model->serviceLevel = $map['ServiceLevel'];
        }

        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        if (isset($map['VipSupport'])) {
            $model->vipSupport = $map['VipSupport'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        if (isset($map['WrapupTime'])) {
            $model->wrapupTime = $map['WrapupTime'];
        }

        return $model;
    }
}
