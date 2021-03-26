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

    /**
     * @description 素材标签中文名
     *
     * @var string
     */
    public $mediaTagNameChinese;

    /**
     * @description 素材标签英文名
     *
     * @var string
     */
    public $mediaTagNameEnglish;
    protected $_name = [
        'mediaTagId'          => 'MediaTagId',
        'mediaTagNameChinese' => 'MediaTagNameChinese',
        'mediaTagNameEnglish' => 'MediaTagNameEnglish',
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
        if (null !== $this->mediaTagNameChinese) {
            $res['MediaTagNameChinese'] = $this->mediaTagNameChinese;
        }
        if (null !== $this->mediaTagNameEnglish) {
            $res['MediaTagNameEnglish'] = $this->mediaTagNameEnglish;
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
        if (isset($map['MediaTagNameChinese'])) {
            $model->mediaTagNameChinese = $map['MediaTagNameChinese'];
        }
        if (isset($map['MediaTagNameEnglish'])) {
            $model->mediaTagNameEnglish = $map['MediaTagNameEnglish'];
        }

        return $model;
    }
}
