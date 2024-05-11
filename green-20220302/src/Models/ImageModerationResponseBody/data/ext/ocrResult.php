<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext;

use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\ocrResult\location;
use AlibabaCloud\Tea\Model;

class ocrResult extends Model
{
    /**
     * @var location
     */
    public $location;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'location' => 'Location',
        'text'     => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ocrResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
