<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\VerifyDomainOwnerResponseBody;

use AlibabaCloud\Dara\Model;

class verifyResult extends Model
{
    /**
     * @var string
     */
    public $failCode;

    /**
     * @var bool
     */
    public $result;
    protected $_name = [
        'failCode' => 'FailCode',
        'result' => 'Result',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failCode) {
            $res['FailCode'] = $this->failCode;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
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
        if (isset($map['FailCode'])) {
            $model->failCode = $map['FailCode'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
