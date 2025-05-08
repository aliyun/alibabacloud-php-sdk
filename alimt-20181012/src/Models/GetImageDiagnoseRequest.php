<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Dara\Model;

class GetImageDiagnoseRequest extends Model
{
    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'extra' => 'Extra',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
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
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
