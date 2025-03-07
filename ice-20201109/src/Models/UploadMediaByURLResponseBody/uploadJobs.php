<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UploadMediaByURLResponseBody;

use AlibabaCloud\Tea\Model;

class uploadJobs extends Model
{
    /**
     * @description The ID of the upload job.
     *
     * @example 20ce1e05dba64576b96e9683879f0***
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ID of the media asset.
     *
     * @example f476988629f54a7b8a4ba90d1a6c7***
     *
     * @var string
     */
    public $mediaId;

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
        'mediaId'   => 'MediaId',
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
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
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
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['SourceURL'])) {
            $model->sourceURL = $map['SourceURL'];
        }

        return $model;
    }
}
