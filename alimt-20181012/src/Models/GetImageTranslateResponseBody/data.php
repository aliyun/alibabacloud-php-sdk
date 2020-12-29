<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\GetImageTranslateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $orc;

    /**
     * @var string
     */
    public $pictureEditor;
    protected $_name = [
        'url'           => 'Url',
        'orc'           => 'Orc',
        'pictureEditor' => 'PictureEditor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->orc) {
            $res['Orc'] = $this->orc;
        }
        if (null !== $this->pictureEditor) {
            $res['PictureEditor'] = $this->pictureEditor;
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
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Orc'])) {
            $model->orc = $map['Orc'];
        }
        if (isset($map['PictureEditor'])) {
            $model->pictureEditor = $map['PictureEditor'];
        }

        return $model;
    }
}
