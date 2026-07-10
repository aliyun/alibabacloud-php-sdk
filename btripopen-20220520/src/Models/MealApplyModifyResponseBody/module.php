<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyModifyResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $thirdPartyApplyId;
    protected $_name = [
        'thirdPartyApplyId' => 'third_party_apply_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->thirdPartyApplyId) {
            $res['third_party_apply_id'] = $this->thirdPartyApplyId;
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
        if (isset($map['third_party_apply_id'])) {
            $model->thirdPartyApplyId = $map['third_party_apply_id'];
        }

        return $model;
    }
}
