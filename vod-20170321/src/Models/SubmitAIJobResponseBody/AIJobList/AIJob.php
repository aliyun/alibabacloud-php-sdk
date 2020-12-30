<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobResponseBody\AIJobList;

use AlibabaCloud\Tea\Model;

class AIJob extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'type'    => 'Type',
        'jobId'   => 'JobId',
        'mediaId' => 'MediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}
