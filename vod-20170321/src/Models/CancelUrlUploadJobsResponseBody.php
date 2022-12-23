<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CancelUrlUploadJobsResponseBody extends Model
{
    /**
     * @description The IDs of canceled jobs.
     *
     * @var string[]
     */
    public $canceledJobs;

    /**
     * @description The job IDs or upload URLs that do not exist.
     *
     * If you set the request parameter JobIds, the job IDs that do not exist are returned. If you set the request parameter UploadUrls, the upload URLs that do not exist are returned.
     * @var string[]
     */
    public $nonExists;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4D5C-3C3D-D7393642****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'canceledJobs' => 'CanceledJobs',
        'nonExists'    => 'NonExists',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canceledJobs) {
            $res['CanceledJobs'] = $this->canceledJobs;
        }
        if (null !== $this->nonExists) {
            $res['NonExists'] = $this->nonExists;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelUrlUploadJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanceledJobs'])) {
            if (!empty($map['CanceledJobs'])) {
                $model->canceledJobs = $map['CanceledJobs'];
            }
        }
        if (isset($map['NonExists'])) {
            if (!empty($map['NonExists'])) {
                $model->nonExists = $map['NonExists'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
