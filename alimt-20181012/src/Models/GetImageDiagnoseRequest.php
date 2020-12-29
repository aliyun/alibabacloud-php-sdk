<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetImageDiagnoseRequest extends Model
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $extra;
    protected $_name = [
        'url'   => 'Url',
        'extra' => 'Extra',
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
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageDiagnoseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        return $model;
    }
}
