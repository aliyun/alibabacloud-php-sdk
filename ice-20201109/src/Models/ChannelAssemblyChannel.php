<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ChannelAssemblyChannel\outPutConfigList;

class ChannelAssemblyChannel extends Model
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
        if (\is_array($this->outPutConfigList)) {
            Model::validateArray($this->outPutConfigList);
        }
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
            if (\is_array($this->outPutConfigList)) {
                $res['OutPutConfigList'] = [];
                $n1                      = 0;
                foreach ($this->outPutConfigList as $item1) {
                    $res['OutPutConfigList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1                      = 0;
                foreach ($map['OutPutConfigList'] as $item1) {
                    $model->outPutConfigList[$n1++] = outPutConfigList::fromMap($item1);
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
