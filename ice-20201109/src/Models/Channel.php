<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\Channel\outPutConfigList;
use AlibabaCloud\Tea\Model;

class Channel extends Model
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
    public $arn;

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
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var outPutConfigList[]
     */
    public $outPutConfigList;

    /**
     * @var string
     */
    public $playbackMode;

    /**
     * @var int
     */
    public $state;
    protected $_name = [
        'accessPolicy'             => 'AccessPolicy',
        'accessToken'              => 'AccessToken',
        'arn'                      => 'Arn',
        'channelName'              => 'ChannelName',
        'channelTier'              => 'ChannelTier',
        'fillerSourceLocationName' => 'FillerSourceLocationName',
        'fillerSourceName'         => 'FillerSourceName',
        'gmtCreate'                => 'GmtCreate',
        'gmtModified'              => 'GmtModified',
        'outPutConfigList'         => 'OutPutConfigList',
        'playbackMode'             => 'PlaybackMode',
        'state'                    => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPolicy) {
            $res['AccessPolicy'] = $this->accessPolicy;
        }
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->outPutConfigList) {
            $res['OutPutConfigList'] = [];
            if (null !== $this->outPutConfigList && \is_array($this->outPutConfigList)) {
                $n = 0;
                foreach ($this->outPutConfigList as $item) {
                    $res['OutPutConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->playbackMode) {
            $res['PlaybackMode'] = $this->playbackMode;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Channel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPolicy'])) {
            $model->accessPolicy = $map['AccessPolicy'];
        }
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['OutPutConfigList'])) {
            if (!empty($map['OutPutConfigList'])) {
                $model->outPutConfigList = [];
                $n                       = 0;
                foreach ($map['OutPutConfigList'] as $item) {
                    $model->outPutConfigList[$n++] = null !== $item ? outPutConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PlaybackMode'])) {
            $model->playbackMode = $map['PlaybackMode'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
