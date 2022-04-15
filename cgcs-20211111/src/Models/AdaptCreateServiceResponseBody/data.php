<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\AdaptCreateServiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $adaptApplyId;
    protected $_name = [
        'adaptApplyId' => 'AdaptApplyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adaptApplyId) {
            $res['AdaptApplyId'] = $this->adaptApplyId;
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
        if (isset($map['AdaptApplyId'])) {
            $model->adaptApplyId = $map['AdaptApplyId'];
        }

        return $model;
    }
}
