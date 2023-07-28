<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\UploadMediaByURLResponseBody;

use AlibabaCloud\Tea\Model;

class uploadJobs extends Model
{
    /**
     * @description The ID of the upload job.
     *
     * @example ad90a501b1b94fb72374ad005046****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The URL of the source file that is uploaded in the upload job.
     *
     * @example http://example****.mp4
     *
     * @var string
     */
    public $sourceURL;
    protected $_name = [
        'jobId'     => 'JobId',
        'sourceURL' => 'SourceURL',
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
        if (null !== $this->sourceURL) {
            $res['SourceURL'] = $this->sourceURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uploadJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['SourceURL'])) {
            $model->sourceURL = $map['SourceURL'];
        }

        return $model;
    }
}
