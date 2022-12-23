<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaRefreshJobsResponseBody\mediaRefreshJobs;
use AlibabaCloud\Tea\Model;

class GetMediaRefreshJobsResponseBody extends Model
{
    /**
     * @description The media refresh or prefetch jobs.
     *
     * @var mediaRefreshJobs[]
     */
    public $mediaRefreshJobs;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaRefreshJobs' => 'MediaRefreshJobs',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaRefreshJobs) {
            $res['MediaRefreshJobs'] = [];
            if (null !== $this->mediaRefreshJobs && \is_array($this->mediaRefreshJobs)) {
                $n = 0;
                foreach ($this->mediaRefreshJobs as $item) {
                    $res['MediaRefreshJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaRefreshJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaRefreshJobs'])) {
            if (!empty($map['MediaRefreshJobs'])) {
                $model->mediaRefreshJobs = [];
                $n                       = 0;
                foreach ($map['MediaRefreshJobs'] as $item) {
                    $model->mediaRefreshJobs[$n++] = null !== $item ? mediaRefreshJobs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
