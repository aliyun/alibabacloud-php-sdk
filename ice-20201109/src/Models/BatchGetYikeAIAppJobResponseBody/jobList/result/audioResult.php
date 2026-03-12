<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetYikeAIAppJobResponseBody\jobList\result;

use AlibabaCloud\Dara\Model;

class audioResult extends Model
{
    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $outputUrl;
    protected $_name = [
        'mediaId' => 'MediaId',
        'outputUrl' => 'OutputUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->outputUrl) {
            $res['OutputUrl'] = $this->outputUrl;
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
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['OutputUrl'])) {
            $model->outputUrl = $map['OutputUrl'];
        }

        return $model;
    }
}
