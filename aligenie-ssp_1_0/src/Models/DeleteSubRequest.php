<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class DeleteSubRequest extends Model
{
    /**
     * @var int
     */
    public $subId;
    protected $_name = [
        'subId' => 'SubId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSubRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }

        return $model;
    }
}
