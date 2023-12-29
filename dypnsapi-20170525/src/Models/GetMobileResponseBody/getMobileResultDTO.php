<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetMobileResponseBody;

use AlibabaCloud\Tea\Model;

class getMobileResultDTO extends Model
{
    /**
     * @description The phone number,
     *
     * @example 13900001234
     *
     * @var string
     */
    public $mobile;
    protected $_name = [
        'mobile' => 'Mobile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return getMobileResultDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        return $model;
    }
}
