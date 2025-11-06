<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RtcSipMuteRequest\operations;

class RtcSipMuteRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var operations[]
     */
    public $operations;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'operations' => 'Operations',
    ];

    public function validate()
    {
        if (\is_array($this->operations)) {
            Model::validateArray($this->operations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->operations) {
            if (\is_array($this->operations)) {
                $res['Operations'] = [];
                $n1 = 0;
                foreach ($this->operations as $item1) {
                    $res['Operations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['Operations'])) {
            if (!empty($map['Operations'])) {
                $model->operations = [];
                $n1 = 0;
                foreach ($map['Operations'] as $item1) {
                    $model->operations[$n1] = operations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
