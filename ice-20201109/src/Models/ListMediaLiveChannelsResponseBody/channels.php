<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody\channels\audioSettings;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody\channels\inputAttachments;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody\channels\outputGroups;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody\channels\videoSettings;

class channels extends Model
{
    /**
     * @var audioSettings[]
     */
    public $audioSettings;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var inputAttachments[]
     */
    public $inputAttachments;

    /**
     * @var string
     */
    public $lastStartTime;

    /**
     * @var string
     */
    public $lastStopTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var outputGroups[]
     */
    public $outputGroups;

    /**
     * @var string
     */
    public $state;

    /**
     * @var videoSettings[]
     */
    public $videoSettings;
    protected $_name = [
        'audioSettings' => 'AudioSettings',
        'channelId' => 'ChannelId',
        'createTime' => 'CreateTime',
        'inputAttachments' => 'InputAttachments',
        'lastStartTime' => 'LastStartTime',
        'lastStopTime' => 'LastStopTime',
        'name' => 'Name',
        'outputGroups' => 'OutputGroups',
        'state' => 'State',
        'videoSettings' => 'VideoSettings',
    ];

    public function validate()
    {
        if (\is_array($this->audioSettings)) {
            Model::validateArray($this->audioSettings);
        }
        if (\is_array($this->inputAttachments)) {
            Model::validateArray($this->inputAttachments);
        }
        if (\is_array($this->outputGroups)) {
            Model::validateArray($this->outputGroups);
        }
        if (\is_array($this->videoSettings)) {
            Model::validateArray($this->videoSettings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioSettings) {
            if (\is_array($this->audioSettings)) {
                $res['AudioSettings'] = [];
                $n1 = 0;
                foreach ($this->audioSettings as $item1) {
                    $res['AudioSettings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->inputAttachments) {
            if (\is_array($this->inputAttachments)) {
                $res['InputAttachments'] = [];
                $n1 = 0;
                foreach ($this->inputAttachments as $item1) {
                    $res['InputAttachments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lastStartTime) {
            $res['LastStartTime'] = $this->lastStartTime;
        }

        if (null !== $this->lastStopTime) {
            $res['LastStopTime'] = $this->lastStopTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputGroups) {
            if (\is_array($this->outputGroups)) {
                $res['OutputGroups'] = [];
                $n1 = 0;
                foreach ($this->outputGroups as $item1) {
                    $res['OutputGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->videoSettings) {
            if (\is_array($this->videoSettings)) {
                $res['VideoSettings'] = [];
                $n1 = 0;
                foreach ($this->videoSettings as $item1) {
                    $res['VideoSettings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AudioSettings'])) {
            if (!empty($map['AudioSettings'])) {
                $model->audioSettings = [];
                $n1 = 0;
                foreach ($map['AudioSettings'] as $item1) {
                    $model->audioSettings[$n1] = audioSettings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InputAttachments'])) {
            if (!empty($map['InputAttachments'])) {
                $model->inputAttachments = [];
                $n1 = 0;
                foreach ($map['InputAttachments'] as $item1) {
                    $model->inputAttachments[$n1] = inputAttachments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LastStartTime'])) {
            $model->lastStartTime = $map['LastStartTime'];
        }

        if (isset($map['LastStopTime'])) {
            $model->lastStopTime = $map['LastStopTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OutputGroups'])) {
            if (!empty($map['OutputGroups'])) {
                $model->outputGroups = [];
                $n1 = 0;
                foreach ($map['OutputGroups'] as $item1) {
                    $model->outputGroups[$n1] = outputGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['VideoSettings'])) {
            if (!empty($map['VideoSettings'])) {
                $model->videoSettings = [];
                $n1 = 0;
                foreach ($map['VideoSettings'] as $item1) {
                    $model->videoSettings[$n1] = videoSettings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
