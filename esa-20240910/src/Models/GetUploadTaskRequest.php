<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetUploadTaskRequest extends Model
{
    /**
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @example 159253299357****
     *
     * @var int
     */
    public $uploadId;
    protected $_name = [
        'siteId'   => 'SiteId',
        'uploadId' => 'UploadId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->uploadId) {
            $res['UploadId'] = $this->uploadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUploadTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['UploadId'])) {
            $model->uploadId = $map['UploadId'];
        }

        return $model;
    }
}
