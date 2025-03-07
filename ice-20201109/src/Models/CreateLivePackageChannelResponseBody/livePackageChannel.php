<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateLivePackageChannelResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLivePackageChannelResponseBody\livePackageChannel\ingestEndpoints;
use AlibabaCloud\Tea\Model;

class livePackageChannel extends Model
{
    /**
     * @description The channel name.
     *
     * @example example-channel
     *
     * @var string
     */
    public $channelName;

    /**
     * @description The time when the channel was created. It is in the yyyy-MM-ddTHH:mm:ssZ format and displayed in UTC.
     *
     * @example 2023-04-01T12:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The channel description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The channel group name.
     *
     * @example channel-group-1
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ingest endpoints.
     *
     * @var ingestEndpoints[]
     */
    public $ingestEndpoints;

    /**
     * @description The time when the channel was last modified. It is in the yyyy-MM-ddTHH:mm:ssZ format and displayed in UTC.
     *
     * @example 2023-04-01T12:00:00Z
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description The ingest protocol. Only HLS is supported.
     *
     * @example HLS
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The number of M3U8 segments.
     *
     * @example 3
     *
     * @var int
     */
    public $segmentCount;

    /**
     * @description The segment duration.
     *
     * @example 5
     *
     * @var int
     */
    public $segmentDuration;
    protected $_name = [
        'channelName'     => 'ChannelName',
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'groupName'       => 'GroupName',
        'ingestEndpoints' => 'IngestEndpoints',
        'lastModified'    => 'LastModified',
        'protocol'        => 'Protocol',
        'segmentCount'    => 'SegmentCount',
        'segmentDuration' => 'SegmentDuration',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ingestEndpoints) {
            $res['IngestEndpoints'] = [];
            if (null !== $this->ingestEndpoints && \is_array($this->ingestEndpoints)) {
                $n = 0;
                foreach ($this->ingestEndpoints as $item) {
                    $res['IngestEndpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
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
     * @return livePackageChannel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IngestEndpoints'])) {
            if (!empty($map['IngestEndpoints'])) {
                $model->ingestEndpoints = [];
                $n                      = 0;
                foreach ($map['IngestEndpoints'] as $item) {
                    $model->ingestEndpoints[$n++] = null !== $item ? ingestEndpoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
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
