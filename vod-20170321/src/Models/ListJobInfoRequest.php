<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class ListJobInfoRequest extends Model
{
    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'jobType' => 'JobType',
        'mediaId' => 'MediaId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
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
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}
