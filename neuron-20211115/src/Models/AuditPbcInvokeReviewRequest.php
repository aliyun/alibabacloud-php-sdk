<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class AuditPbcInvokeReviewRequest extends Model
{
    /**
     * @var bool
     */
    public $approve;
    protected $_name = [
        'approve' => 'approve',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approve) {
            $res['approve'] = $this->approve;
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
        if (isset($map['approve'])) {
            $model->approve = $map['approve'];
        }

        return $model;
    }
}
