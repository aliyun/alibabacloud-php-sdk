<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveGrtnDurationResponseBody\streamDetailData;

use AlibabaCloud\Dara\Model;

class streamData extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $mediaProfile;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'appId' => 'AppId',
        'duration' => 'Duration',
        'mediaProfile' => 'MediaProfile',
        'mediaType' => 'MediaType',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->mediaProfile) {
            $res['MediaProfile'] = $this->mediaProfile;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['MediaProfile'])) {
            $model->mediaProfile = $map['MediaProfile'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
