<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results;

use AlibabaCloud\Tea\Model;

class frames extends Model
{
    /**
     * @var float
     */
    public $rate;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'rate' => 'rate',
        'url'  => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rate) {
            $res['rate'] = $this->rate;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['rate'])) {
            $model->rate = $map['rate'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
