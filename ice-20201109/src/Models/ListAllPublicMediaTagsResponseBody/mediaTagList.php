<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponseBody\mediaTagList\options;

class mediaTagList extends Model
{
    /**
     * @var string
     */
    public $mediaTagId;
    /**
     * @var string
     */
    public $mediaTagNameChinese;
    /**
     * @var string
     */
    public $mediaTagNameEnglish;
    /**
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
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->options)) {
                $res['Options'] = [];
                $n1             = 0;
                foreach ($this->options as $item1) {
                    $res['Options'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1             = 0;
                foreach ($map['Options'] as $item1) {
                    $model->options[$n1++] = options::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
