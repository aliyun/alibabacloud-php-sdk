<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\GetImageTranslateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $orc;

    /**
     * @var string
     */
    public $pictureEditor;

    /**
     * @example https://ae01.alicdn.com/kf/xxxxx.jpeg
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'orc'           => 'Orc',
        'pictureEditor' => 'PictureEditor',
        'url'           => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orc) {
            $res['Orc'] = $this->orc;
        }
        if (null !== $this->pictureEditor) {
            $res['PictureEditor'] = $this->pictureEditor;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Orc'])) {
            $model->orc = $map['Orc'];
        }
        if (isset($map['PictureEditor'])) {
            $model->pictureEditor = $map['PictureEditor'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
