<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class InvoiceDeleteRequest extends Model
{
    /**
     * @example 340049
     *
     * @var string
     */
    public $thirdPartId;
    protected $_name = [
        'thirdPartId' => 'third_part_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->thirdPartId) {
            $res['third_part_id'] = $this->thirdPartId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvoiceDeleteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['third_part_id'])) {
            $model->thirdPartId = $map['third_part_id'];
        }

        return $model;
    }
}
