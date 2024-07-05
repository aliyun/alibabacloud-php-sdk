<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteAttachedMediaRequest extends Model
{
    /**
     * @description The ID of the auxiliary media asset that you want to delete. You can obtain the ID of the auxiliary media asset from the MediaId parameter in the response to the [CreateUploadAttachedMedia](https://help.aliyun.com/document_detail/98467.html) operation.
     *
     *   Separate multiple IDs with commas (,).
     *   You can specify a maximum of 20 IDs.
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
