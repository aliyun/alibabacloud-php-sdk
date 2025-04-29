<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TrainExceedApplyQueryRequest extends Model
{
    /**
     * @var int
     */
    public $applyId;

    /**
     * @var string
     */
    public $businessInstanceId;
    protected $_name = [
        'applyId' => 'apply_id',
        'businessInstanceId' => 'business_instance_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

        if (null !== $this->businessInstanceId) {
            $res['business_instance_id'] = $this->businessInstanceId;
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
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }

        if (isset($map['business_instance_id'])) {
            $model->businessInstanceId = $map['business_instance_id'];
        }

        return $model;
    }
}
