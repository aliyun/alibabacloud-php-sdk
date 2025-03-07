<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListAllPublicMediaTagsRequest extends Model
{
    /**
     * @description The business type of the media asset.
     *
     * @example "sticker"
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The entity ID, which is used to distinguish between media assets of different types in the public domain.
     *
     * Set this parameter to Copyright_Music, which indicates music in the public domain.
     * @example Copyright_Music
     *
     * @var string
     */
    public $entityId;
    protected $_name = [
        'businessType' => 'BusinessType',
        'entityId'     => 'EntityId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAllPublicMediaTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        return $model;
    }
}
