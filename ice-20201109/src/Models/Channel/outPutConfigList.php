<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\Channel;

use AlibabaCloud\Tea\Model;

class outPutConfigList extends Model
{
    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $manifestName;

    /**
     * @var string
     */
    public $manifestSettings;

    /**
     * @var string
     */
    public $playbackUrl;

    /**
     * @var string
     */
    public $sourceGroupName;
    protected $_name = [
        'channelName'      => 'ChannelName',
        'format'           => 'Format',
        'manifestName'     => 'ManifestName',
        'manifestSettings' => 'ManifestSettings',
        'playbackUrl'      => 'PlaybackUrl',
        'sourceGroupName'  => 'SourceGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->manifestName) {
            $res['ManifestName'] = $this->manifestName;
        }
        if (null !== $this->manifestSettings) {
            $res['ManifestSettings'] = $this->manifestSettings;
        }
        if (null !== $this->playbackUrl) {
            $res['PlaybackUrl'] = $this->playbackUrl;
        }
        if (null !== $this->sourceGroupName) {
            $res['SourceGroupName'] = $this->sourceGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outPutConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['ManifestName'])) {
            $model->manifestName = $map['ManifestName'];
        }
        if (isset($map['ManifestSettings'])) {
            $model->manifestSettings = $map['ManifestSettings'];
        }
        if (isset($map['PlaybackUrl'])) {
            $model->playbackUrl = $map['PlaybackUrl'];
        }
        if (isset($map['SourceGroupName'])) {
            $model->sourceGroupName = $map['SourceGroupName'];
        }

        return $model;
    }
}
