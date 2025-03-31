<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityEvaluationTaskInstance\task\notifications\notifications;

use AlibabaCloud\Dara\Model;

class notificationChannels extends Model
{
    /**
     * @var string[]
     */
    public $channels;
    protected $_name = [
        'channels' => 'Channels',
    ];

    public function validate()
    {
        if (\is_array($this->channels)) {
            Model::validateArray($this->channels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channels) {
            if (\is_array($this->channels)) {
                $res['Channels'] = [];
                $n1 = 0;
                foreach ($this->channels as $item1) {
                    $res['Channels'][$n1++] = $item1;
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
        if (isset($map['Channels'])) {
            if (!empty($map['Channels'])) {
                $model->channels = [];
                $n1 = 0;
                foreach ($map['Channels'] as $item1) {
                    $model->channels[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
