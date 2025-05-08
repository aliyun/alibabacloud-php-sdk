<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\GetImageTranslateResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $url;
    protected $_name = [
        'orc' => 'Orc',
        'pictureEditor' => 'PictureEditor',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
