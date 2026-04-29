<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribePolarClawChannelsRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string[]
     */
    public $channelList;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'channelList' => 'ChannelList',
    ];

    public function validate()
    {
        if (\is_array($this->channelList)) {
            Model::validateArray($this->channelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->channelList) {
            if (\is_array($this->channelList)) {
                $res['ChannelList'] = [];
                $n1 = 0;
                foreach ($this->channelList as $item1) {
                    $res['ChannelList'][$n1] = $item1;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ChannelList'])) {
            if (!empty($map['ChannelList'])) {
                $model->channelList = [];
                $n1 = 0;
                foreach ($map['ChannelList'] as $item1) {
                    $model->channelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
