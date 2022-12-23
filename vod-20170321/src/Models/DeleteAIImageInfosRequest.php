<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteAIImageInfosRequest extends Model
{
    /**
     * @description The IDs of the images that are submitted for AI processing. You can obtain the value of AIImageInfoId from the response to the [ListAIImageInfo](~~ListAIImageInfo~~) operation.
     *
     * - Separate multiple IDs with commas (,).
     * @example b89a6aabf144*****6197ebd6fe6cf29
     *
     * @var string
     */
    public $AIImageInfoIds;
    protected $_name = [
        'AIImageInfoIds' => 'AIImageInfoIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIImageInfoIds) {
            $res['AIImageInfoIds'] = $this->AIImageInfoIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAIImageInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIImageInfoIds'])) {
            $model->AIImageInfoIds = $map['AIImageInfoIds'];
        }

        return $model;
    }
}
