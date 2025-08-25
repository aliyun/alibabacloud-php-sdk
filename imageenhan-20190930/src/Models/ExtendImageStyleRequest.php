<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Dara\Model;

class ExtendImageStyleRequest extends Model
{
    /**
     * @var string
     */
    public $majorUrl;

    /**
     * @var string
     */
    public $styleUrl;
    protected $_name = [
        'majorUrl' => 'MajorUrl',
        'styleUrl' => 'StyleUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->majorUrl) {
            $res['MajorUrl'] = $this->majorUrl;
        }

        if (null !== $this->styleUrl) {
            $res['StyleUrl'] = $this->styleUrl;
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
        if (isset($map['MajorUrl'])) {
            $model->majorUrl = $map['MajorUrl'];
        }

        if (isset($map['StyleUrl'])) {
            $model->styleUrl = $map['StyleUrl'];
        }

        return $model;
    }
}
