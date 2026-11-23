<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\MosQueryRegistrationInfoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\MosQueryRegistrationInfoResponseBody\data\list_\tagInfos;

class list_ extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $checkinStatus;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $qrCode;

    /**
     * @var tagInfos[]
     */
    public $tagInfos;

    /**
     * @var string
     */
    public $userCompany;

    /**
     * @var string
     */
    public $userEmail;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userPhone;
    protected $_name = [
        'activityId' => 'ActivityId',
        'channelName' => 'ChannelName',
        'checkinStatus' => 'CheckinStatus',
        'id' => 'Id',
        'qrCode' => 'QrCode',
        'tagInfos' => 'TagInfos',
        'userCompany' => 'UserCompany',
        'userEmail' => 'UserEmail',
        'userName' => 'UserName',
        'userPhone' => 'UserPhone',
    ];

    public function validate()
    {
        if (\is_array($this->tagInfos)) {
            Model::validateArray($this->tagInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        if (null !== $this->checkinStatus) {
            $res['CheckinStatus'] = $this->checkinStatus;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->qrCode) {
            $res['QrCode'] = $this->qrCode;
        }

        if (null !== $this->tagInfos) {
            if (\is_array($this->tagInfos)) {
                $res['TagInfos'] = [];
                $n1 = 0;
                foreach ($this->tagInfos as $item1) {
                    $res['TagInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userCompany) {
            $res['UserCompany'] = $this->userCompany;
        }

        if (null !== $this->userEmail) {
            $res['UserEmail'] = $this->userEmail;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->userPhone) {
            $res['UserPhone'] = $this->userPhone;
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
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }

        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        if (isset($map['CheckinStatus'])) {
            $model->checkinStatus = $map['CheckinStatus'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['QrCode'])) {
            $model->qrCode = $map['QrCode'];
        }

        if (isset($map['TagInfos'])) {
            if (!empty($map['TagInfos'])) {
                $model->tagInfos = [];
                $n1 = 0;
                foreach ($map['TagInfos'] as $item1) {
                    $model->tagInfos[$n1] = tagInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserCompany'])) {
            $model->userCompany = $map['UserCompany'];
        }

        if (isset($map['UserEmail'])) {
            $model->userEmail = $map['UserEmail'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['UserPhone'])) {
            $model->userPhone = $map['UserPhone'];
        }

        return $model;
    }
}
