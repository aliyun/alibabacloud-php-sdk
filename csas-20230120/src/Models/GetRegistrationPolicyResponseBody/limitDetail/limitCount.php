<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetRegistrationPolicyResponseBody\limitDetail;

use AlibabaCloud\Tea\Model;

class limitCount extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $all;

    /**
     * @example 2
     *
     * @var int
     */
    public $mobile;

    /**
     * @example 2
     *
     * @var int
     */
    public $PC;
    protected $_name = [
        'all'    => 'All',
        'mobile' => 'Mobile',
        'PC'     => 'PC',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->PC) {
            $res['PC'] = $this->PC;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return limitCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['PC'])) {
            $model->PC = $map['PC'];
        }

        return $model;
    }
}
