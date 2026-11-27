<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PushDeviceRenderMessageResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $accepted;

    /**
     * @var string
     */
    public $failCode;
    protected $_name = [
        'accepted' => 'Accepted',
        'failCode' => 'FailCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accepted) {
            $res['Accepted'] = $this->accepted;
        }

        if (null !== $this->failCode) {
            $res['FailCode'] = $this->failCode;
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
        if (isset($map['Accepted'])) {
            $model->accepted = $map['Accepted'];
        }

        if (isset($map['FailCode'])) {
            $model->failCode = $map['FailCode'];
        }

        return $model;
    }
}
