<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetUploadDetailsRequest extends Model
{
    /**
     * @var int
     */
    public $resourceRealOwnerId;

    /**
     * @var string
     */
    public $mediaIds;

    /**
     * @var string
     */
    public $mediaType;
    protected $_name = [
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'mediaIds'            => 'MediaIds',
        'mediaType'           => 'MediaType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceRealOwnerId) {
            $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        }
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUploadDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceRealOwnerId'])) {
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        return $model;
    }
}
