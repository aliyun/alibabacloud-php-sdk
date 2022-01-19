<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\JyGetMobileResponseBody;

use AlibabaCloud\Tea\Model;

class getMobileResultData extends Model
{
    /**
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
     * @return getMobileResultData
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
