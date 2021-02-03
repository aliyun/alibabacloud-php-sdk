<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponseBody;

use AlibabaCloud\Tea\Model;

class mediaTagList extends Model
{
    /**
     * @description 素材标签id
     *
     * @var string
     */
    public $mediaTagId;
    protected $_name = [
        'mediaTagId' => 'MediaTagId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaTagId) {
            $res['MediaTagId'] = $this->mediaTagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaTagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaTagId'])) {
            $model->mediaTagId = $map['MediaTagId'];
        }

        return $model;
    }
}
