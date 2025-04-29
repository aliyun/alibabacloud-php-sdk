<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyAddResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $thirdPartApplyId;
    protected $_name = [
        'thirdPartApplyId' => 'third_part_apply_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->thirdPartApplyId) {
            $res['third_part_apply_id'] = $this->thirdPartApplyId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['third_part_apply_id'])) {
            $model->thirdPartApplyId = $map['third_part_apply_id'];
        }

        return $model;
    }
}
