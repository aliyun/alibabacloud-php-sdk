<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest\singleStreamingRecord;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest\singleStreamingRecord\transcodingParameters\audio;
use AlibabaCloud\Tea\Model;

class transcodingParameters extends Model
{
    /**
     * @var audio
     */
    public $audio;

    /**
     * @var string
     */
    public $container;
    protected $_name = [
        'audio' => 'Audio',
        'container' => 'Container',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        }
        if (null !== $this->container) {
            $res['Container'] = $this->container;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodingParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Audio'])) {
            $model->audio = audio::fromMap($map['Audio']);
        }
        if (isset($map['Container'])) {
            $model->container = $map['Container'];
        }

        return $model;
    }
}
