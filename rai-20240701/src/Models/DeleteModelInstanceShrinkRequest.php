<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class DeleteModelInstanceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $modelInstanceIdListShrink;
    protected $_name = [
        'modelInstanceIdListShrink' => 'ModelInstanceIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelInstanceIdListShrink) {
            $res['ModelInstanceIdList'] = $this->modelInstanceIdListShrink;
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
        if (isset($map['ModelInstanceIdList'])) {
            $model->modelInstanceIdListShrink = $map['ModelInstanceIdList'];
        }

        return $model;
    }
}
