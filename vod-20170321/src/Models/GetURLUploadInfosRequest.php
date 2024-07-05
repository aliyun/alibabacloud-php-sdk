<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetURLUploadInfosRequest extends Model
{
    /**
     * @description The one or more IDs of upload jobs. You can obtain the job IDs in the response parameter JobId of the [UploadMediaByURL](https://help.aliyun.com/document_detail/86311.html) operation.
     *
     * > You must set one of the JobIds and the UploadURLs parameters. If you set both the JobIds and UploadURLs parameters, only the value of the JobIds parameter takes effect.
     * @example 86c1925fba0****,7afb201e7fa****,2cc4997378****
     *
     * @var string
     */
    public $jobIds;

    /**
     * @description The one or more upload URLs of the source files. Separate multiple URLs with commas (,). You can specify a maximum of 10 URLs.
     *
     * > * You must encode the URLs before you use the URLs.
     * > * If a media file is uploaded multiple times, pass the URL of the media file to this parameter only once.
     * > * You must set one of the JobIds and the UploadURLs parameters. If you set both the JobIds and UploadURLs parameters, only the value of the JobIds parameter takes effect.
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
