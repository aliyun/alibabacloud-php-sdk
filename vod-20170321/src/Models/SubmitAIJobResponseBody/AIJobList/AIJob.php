<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobResponseBody\AIJobList;

use AlibabaCloud\Tea\Model;

class AIJob extends Model
{
    /**
     * @description The ID of the AI job.
     *
     * @example 9e82640c85114bf5af23edfaf****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ID of the video.
     *
     * @example 3D3D12340d92c641401fab46a0b847****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The type of the AI job. Valid values:
     *
     *   **AIMediaDNA**: The media fingerprinting job.
     *   **AIVideoTag**: The smart tagging job.
     *
     * @example AIVideoTag
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'jobId'   => 'JobId',
        'mediaId' => 'MediaId',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
