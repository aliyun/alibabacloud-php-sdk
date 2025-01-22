<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLivePackageChannelResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLivePackageChannelResponseBody\livePackageChannel\ingestEndpoints;

class livePackageChannel extends Model
{
    /**
     * @var string
     */
    public $channelName;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var ingestEndpoints[]
     */
    public $ingestEndpoints;
    /**
     * @var string
     */
    public $lastModified;
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
        if (\is_array($this->ingestEndpoints)) {
            Model::validateArray($this->ingestEndpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ingestEndpoints)) {
                $res['IngestEndpoints'] = [];
                $n1                     = 0;
                foreach ($this->ingestEndpoints as $item1) {
                    $res['IngestEndpoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1                     = 0;
                foreach ($map['IngestEndpoints'] as $item1) {
                    $model->ingestEndpoints[$n1++] = ingestEndpoints::fromMap($item1);
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
