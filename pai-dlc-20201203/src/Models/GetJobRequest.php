<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetJobRequest extends Model
{
    /**
     * @var bool
     */
    public $needDetail;
    protected $_name = [
        'needDetail' => 'NeedDetail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->needDetail) {
            $res['NeedDetail'] = $this->needDetail;
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
        if (isset($map['NeedDetail'])) {
            $model->needDetail = $map['NeedDetail'];
        }

        return $model;
    }
}
