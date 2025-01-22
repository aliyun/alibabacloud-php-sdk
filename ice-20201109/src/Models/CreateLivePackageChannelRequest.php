<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateLivePackageChannelRequest extends Model
{
    /**
     * @var string
     */
    public $channelName;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $protocol;
    /**
     * @var int
     */
    public $segmentCount;
    /**
     * @var int
     */
    public $segmentDuration;
    protected $_name = [
        'channelName'     => 'ChannelName',
        'clientToken'     => 'ClientToken',
        'description'     => 'Description',
        'groupName'       => 'GroupName',
        'protocol'        => 'Protocol',
        'segmentCount'    => 'SegmentCount',
        'segmentDuration' => 'SegmentDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->segmentCount) {
            $res['SegmentCount'] = $this->segmentCount;
        }

        if (null !== $this->segmentDuration) {
            $res['SegmentDuration'] = $this->segmentDuration;
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
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['SegmentCount'])) {
            $model->segmentCount = $map['SegmentCount'];
        }

        if (isset($map['SegmentDuration'])) {
            $model->segmentDuration = $map['SegmentDuration'];
        }

        return $model;
    }
}
