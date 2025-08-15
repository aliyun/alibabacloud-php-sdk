<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Id2MetaPeriodVerifyIntlResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $passed;

    /**
     * @var string
     */
    public $subCode;
    protected $_name = [
        'passed' => 'Passed',
        'subCode' => 'SubCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }

        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
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
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        return $model;
    }
}
