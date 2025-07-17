<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskRequest\notifications\notifications;

use AlibabaCloud\Tea\Model;

class notificationChannels extends Model
{
    /**
     * @description The alert notification methods.
     *
     * @var string[]
     */
    public $channels;
    protected $_name = [
        'channels' => 'Channels',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationChannels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channels'])) {
            if (!empty($map['Channels'])) {
                $model->channels = $map['Channels'];
            }
        }

        return $model;
    }
}
