<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models\AndroidShortPayload;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $custom;
    protected $_name = [
        'custom' => 'custom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custom) {
            $res['custom'] = $this->custom;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['custom'])) {
            $model->custom = $map['custom'];
        }

        return $model;
    }
}
