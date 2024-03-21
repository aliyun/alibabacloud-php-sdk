<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class DescribeQualificationStatusRequest extends Model
{
    /**
     * @var string
     */
    public $tbUid;
    protected $_name = [
        'tbUid' => 'TbUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tbUid) {
            $res['TbUid'] = $this->tbUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeQualificationStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TbUid'])) {
            $model->tbUid = $map['TbUid'];
        }

        return $model;
    }
}
