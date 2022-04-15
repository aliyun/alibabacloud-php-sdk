<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\GetOssInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $first;

    /**
     * @var string
     */
    public $second;
    protected $_name = [
        'first'  => 'First',
        'second' => 'Second',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->first) {
            $res['First'] = $this->first;
        }
        if (null !== $this->second) {
            $res['Second'] = $this->second;
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
        if (isset($map['First'])) {
            $model->first = $map['First'];
        }
        if (isset($map['Second'])) {
            $model->second = $map['Second'];
        }

        return $model;
    }
}
