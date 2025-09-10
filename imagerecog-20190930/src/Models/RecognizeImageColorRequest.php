<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models;

use AlibabaCloud\Dara\Model;

class RecognizeImageColorRequest extends Model
{
    /**
     * @var int
     */
    public $colorCount;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'colorCount' => 'ColorCount',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->colorCount) {
            $res['ColorCount'] = $this->colorCount;
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
        if (isset($map['ColorCount'])) {
            $model->colorCount = $map['ColorCount'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
