<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotPostImeiResponseBody;

use AlibabaCloud\Tea\Model;

class iotPostImei extends Model
{
    /**
     * @var bool
     */
    public $isPostSuccess;
    protected $_name = [
        'isPostSuccess' => 'IsPostSuccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isPostSuccess) {
            $res['IsPostSuccess'] = $this->isPostSuccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return iotPostImei
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsPostSuccess'])) {
            $model->isPostSuccess = $map['IsPostSuccess'];
        }

        return $model;
    }
}
