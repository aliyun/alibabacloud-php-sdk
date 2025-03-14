<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateLivePackageChannelRequest extends Model
{
    /**
     * @description The channel name. It can contain letters, digits, hyphens (-), and underscores (_). The name must be 1 to 200 characters in length. Format: [A-Za-z0-9_-]+
     *
     * This parameter is required.
     *
     * @example channel-1
     *
     * @var string
     */
    public $channelName;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example ****12e8864746a0a398****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The channel description. It can be up to 1,000 characters in length.
     *
     * @var string
     */
    public $description;

    /**
     * @description The channel group name. It can contain letters, digits, hyphens (-), and underscores (_). The name must be 1 to 200 characters in length. Format: [A-Za-z0-9_-]+
     *
     * This parameter is required.
     *
     * @example channel-group-1
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ingest protocol. Only HLS is supported.
     *
     * This parameter is required.
     *
     * @example HLS
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The number of M3U8 segments. Valid values: 2 to 100.
     *
     * This parameter is required.
     *
     * @example 3
     *
     * @var int
     */
    public $segmentCount;

    /**
     * @description The segment duration. Valid values: 1 to 30.
     *
     * This parameter is required.
     *
     * @example 6
     *
     * @var int
     */
    public $segmentDuration;
    protected $_name = [
        'channelName' => 'ChannelName',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'groupName' => 'GroupName',
        'protocol' => 'Protocol',
        'segmentCount' => 'SegmentCount',
        'segmentDuration' => 'SegmentDuration',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateLivePackageChannelRequest
     */
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
