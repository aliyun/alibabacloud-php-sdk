<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetURLUploadInfosRequest extends Model
{
    /**
     * @description The ID of the upload job.
     *
     * @example 86c1925fba0****,7afb201e7fa****,2cc4997378****
     *
     * @var string
     */
    public $jobIds;

    /**
     * @description The operation that you want to perform. Set the value to **GetURLUploadInfos**.
     *
     * @example http://****.mp4
     *
     * @var string
     */
    public $uploadURLs;
    protected $_name = [
        'jobIds'     => 'JobIds',
        'uploadURLs' => 'UploadURLs',
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
        if (null !== $this->uploadURLs) {
            $res['UploadURLs'] = $this->uploadURLs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetURLUploadInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobIds'])) {
            $model->jobIds = $map['JobIds'];
        }
        if (isset($map['UploadURLs'])) {
            $model->uploadURLs = $map['UploadURLs'];
        }

        return $model;
    }
}
