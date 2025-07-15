<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Id2MetaPeriodVerifyIntlResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example Y
     *
     * @var string
     */
    public $passed;

    /**
     * @example 200
     *
     * @var string
     */
    public $subCode;
    protected $_name = [
        'passed' => 'Passed',
        'subCode' => 'SubCode',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
