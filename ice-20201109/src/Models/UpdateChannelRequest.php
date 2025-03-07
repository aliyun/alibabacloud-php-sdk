<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateChannelRequest extends Model
{
    /**
     * @description Specifies whether to enable access control.
     *
     * @example true
     *
     * @var bool
     */
    public $accessPolicy;

    /**
     * @description The token for accessing the channel.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description The name of the channel.
     *
     * This parameter is required.
     * @example MyChannel
     *
     * @var string
     */
    public $channelName;

    /**
     * @description The source location of the filler slate.
     *
     * @example MySourceLocation
     *
     * @var string
     */
    public $fillerSourceLocationName;

    /**
     * @description The name of the filler slate.
     *
     * @example MySource
     *
     * @var string
     */
    public $fillerSourceName;

    /**
     * @description The channel output configurations.
     *
     * This parameter is required.
     * @example [{
     * }]
     * @var string
     */
    public $outPutConfigList;
    protected $_name = [
        'accessPolicy'             => 'AccessPolicy',
        'accessToken'              => 'AccessToken',
        'channelName'              => 'ChannelName',
        'fillerSourceLocationName' => 'FillerSourceLocationName',
        'fillerSourceName'         => 'FillerSourceName',
        'outPutConfigList'         => 'OutPutConfigList',
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
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateChannelRequest
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
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
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

        return $model;
    }
}
