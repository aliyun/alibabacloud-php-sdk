<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\VerifyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $allowedUids;
    protected $_name = [
        'allowedUids' => 'AllowedUids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedUids) {
            $res['AllowedUids'] = $this->allowedUids;
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
        if (isset($map['AllowedUids'])) {
            if (!empty($map['AllowedUids'])) {
                $model->allowedUids = $map['AllowedUids'];
            }
        }

        return $model;
    }
}
