<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsLiveRecordUsageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $channels;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'channels' => 'Channels',
        'duration' => 'Duration',
        'time'     => 'Time',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
