<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateChannelRequest extends Model
{
    /**
     * @var bool
     */
    public $accessPolicy;
    /**
     * @var string
     */
    public $accessToken;
    /**
     * @var string
     */
    public $channelName;
    /**
     * @var string
     */
    public $channelTier;
    /**
     * @var string
     */
    public $fillerSourceLocationName;
    /**
     * @var string
     */
    public $fillerSourceName;
    /**
     * @var string
     */
    public $outPutConfigList;
    /**
     * @var string
     */
    public $playbackMode;
    protected $_name = [
        'accessPolicy'             => 'AccessPolicy',
        'accessToken'              => 'AccessToken',
        'channelName'              => 'ChannelName',
        'channelTier'              => 'ChannelTier',
        'fillerSourceLocationName' => 'FillerSourceLocationName',
        'fillerSourceName'         => 'FillerSourceName',
        'outPutConfigList'         => 'OutPutConfigList',
        'playbackMode'             => 'PlaybackMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPolicy) {
            $res['AccessPolicy'] = $this->accessPolicy;
        }

        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }

        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        if (null !== $this->channelTier) {
            $res['ChannelTier'] = $this->channelTier;
        }

        if (null !== $this->fillerSourceLocationName) {
            $res['FillerSourceLocationName'] = $this->fillerSourceLocationName;
        }

        if (null !== $this->fillerSourceName) {
            $res['FillerSourceName'] = $this->fillerSourceName;
        }

        if (null !== $this->outPutConfigList) {
            $res['OutPutConfigList'] = $this->outPutConfigList;
        }

        if (null !== $this->playbackMode) {
            $res['PlaybackMode'] = $this->playbackMode;
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
        if (isset($map['AccessPolicy'])) {
            $model->accessPolicy = $map['AccessPolicy'];
        }

        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }

        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        if (isset($map['ChannelTier'])) {
            $model->channelTier = $map['ChannelTier'];
        }

        if (isset($map['FillerSourceLocationName'])) {
            $model->fillerSourceLocationName = $map['FillerSourceLocationName'];
        }

        if (isset($map['FillerSourceName'])) {
            $model->fillerSourceName = $map['FillerSourceName'];
        }

        if (isset($map['OutPutConfigList'])) {
            $model->outPutConfigList = $map['OutPutConfigList'];
        }

        if (isset($map['PlaybackMode'])) {
            $model->playbackMode = $map['PlaybackMode'];
        }

        return $model;
    }
}
