<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CancelUrlUploadJobsRequest extends Model
{
    /**
     * @var string
     */
    public $jobIds;

    /**
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
