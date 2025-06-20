<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\influenceInfo;

use AlibabaCloud\Dara\Model;

class noticeInfos extends Model
{
    /**
     * @var string[]
     */
    public $channel;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $eventId;
    protected $_name = [
        'channel' => 'Channel',
        'content' => 'Content',
        'eventId' => 'EventId',
    ];

    public function validate()
    {
        if (\is_array($this->channel)) {
            Model::validateArray($this->channel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            if (\is_array($this->channel)) {
                $res['Channel'] = [];
                $n1 = 0;
                foreach ($this->channel as $item1) {
                    $res['Channel'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
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
        if (isset($map['Channel'])) {
            if (!empty($map['Channel'])) {
                $model->channel = [];
                $n1 = 0;
                foreach ($map['Channel'] as $item1) {
                    $model->channel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        return $model;
    }
}
