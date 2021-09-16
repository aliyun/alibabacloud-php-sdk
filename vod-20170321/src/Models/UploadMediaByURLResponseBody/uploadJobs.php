<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\UploadMediaByURLResponseBody;

use AlibabaCloud\Tea\Model;

class uploadJobs extends Model
{
    /**
     * @var string
     */
    public $sourceURL;

    /**
     * @var string
     */
    public $jobId;
    protected $_name = [
        'sourceURL' => 'SourceURL',
        'jobId'     => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceURL) {
            $res['SourceURL'] = $this->sourceURL;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (isset($map['SourceURL'])) {
            $model->sourceURL = $map['SourceURL'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
