<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CancelUrlUploadJobsRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 341c92e6c18dc435ee31253685****,0193d395194a83ad6ee2ef27a5b5****
     *
     * @var string
     */
    public $jobIds;

    /**
     * @description The operation that you want to perform. Set the value to **CancelUrlUploadJobs**.
     *
     * @example http://www.example.aliyundoc.com/***\/video01.mp4,http://www.example.aliyundoc.com/***\/video02.mp4
     *
     * @var string
     */
    public $uploadUrls;
    protected $_name = [
        'jobIds'     => 'JobIds',
        'uploadUrls' => 'UploadUrls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobIds) {
            $res['JobIds'] = $this->jobIds;
        }
        if (null !== $this->uploadUrls) {
            $res['UploadUrls'] = $this->uploadUrls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelUrlUploadJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobIds'])) {
            $model->jobIds = $map['JobIds'];
        }
        if (isset($map['UploadUrls'])) {
            $model->uploadUrls = $map['UploadUrls'];
        }

        return $model;
    }
}
