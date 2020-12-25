<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class AbstractFilmVideoRequest extends Model
{
    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var bool
     */
    public $async;

    /**
     * @var int
     */
    public $length;
    protected $_name = [
        'videoUrl' => 'VideoUrl',
        'async'    => 'Async',
        'length'   => 'Length',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AbstractFilmVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        return $model;
    }
}
