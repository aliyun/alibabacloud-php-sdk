<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\CreateProductResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example bb6d7d5b-2ead-4102-8a30-xxxxxxxxxxxx
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'uid' => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
