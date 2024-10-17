<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponseBody\mediaTagList\options;
use AlibabaCloud\Tea\Model;

class mediaTagList extends Model
{
    /**
     * @description The ID of the media tag.
     *
     * @example sticker-gif
     *
     * @var string
     */
    public $mediaTagId;

    /**
     * @description The name of the media tag in Chinese.
     *
     * @example Gif
     *
     * @var string
     */
    public $mediaTagNameChinese;

    /**
     * @description The name of the material tag in English.
     *
     * @var string
     */
    public $mediaTagNameEnglish;

    /**
     * @description The options.
     *
     * @var options[]
     */
    public $options;
    protected $_name = [
        'mediaTagId'          => 'MediaTagId',
        'mediaTagNameChinese' => 'MediaTagNameChinese',
        'mediaTagNameEnglish' => 'MediaTagNameEnglish',
        'options'             => 'Options',
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
        if (null !== $this->options) {
            $res['Options'] = [];
            if (null !== $this->options && \is_array($this->options)) {
                $n = 0;
                foreach ($this->options as $item) {
                    $res['Options'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                $n              = 0;
                foreach ($map['Options'] as $item) {
                    $model->options[$n++] = null !== $item ? options::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
