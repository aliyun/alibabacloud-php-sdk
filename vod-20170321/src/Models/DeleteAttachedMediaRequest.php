<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteAttachedMediaRequest extends Model
{
    /**
     * @description The ID of the auxiliary media asset that you want to delete.
     *
     *   Separate multiple IDs with commas (,). You can specify up to 20 IDs.
     *   You can obtain the ID from the response to the [CreateUploadAttachedMedia](~~CreateUploadAttachedMedia~~) operation that you call to obtain the upload URL and credential.
     *
     * This parameter is required.
     * @example 8bc8e94fe4e55abde85718****,eb186180e989dd56****
     *
     * @var string
     */
    public $mediaIds;
    protected $_name = [
        'mediaIds' => 'MediaIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAttachedMediaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }

        return $model;
    }
}
