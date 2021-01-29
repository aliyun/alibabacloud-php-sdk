<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePoiNameResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePoiNameResponseBody\data\signboards\texts;
use AlibabaCloud\Tea\Model;

class signboards extends Model
{
    /**
     * @var texts[]
     */
    public $texts;
    protected $_name = [
        'texts' => 'Texts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->texts) {
            $res['Texts'] = [];
            if (null !== $this->texts && \is_array($this->texts)) {
                $n = 0;
                foreach ($this->texts as $item) {
                    $res['Texts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signboards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Texts'])) {
            if (!empty($map['Texts'])) {
                $model->texts = [];
                $n            = 0;
                foreach ($map['Texts'] as $item) {
                    $model->texts[$n++] = null !== $item ? texts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
