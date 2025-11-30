<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertJobOverwiteParams;

use AlibabaCloud\Dara\Model;

class subtitles extends Model
{
    /**
     * @var string
     */
    public $codec;
    protected $_name = [
        'codec' => 'Codec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
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
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }

        return $model;
    }
}
