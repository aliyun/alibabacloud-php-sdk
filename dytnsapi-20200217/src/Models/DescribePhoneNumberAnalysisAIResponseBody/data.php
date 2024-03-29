<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAnalysisAIResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The returned code.
     *
     *   YES: The specified phone number is valid.
     *   NO: The specified phone number is invalid.
     *   UNKNOWN: The specified phone number is unknown
     *
     * @example YES
     *
     * @var string
     */
    public $code;

    /**
     * @description The specified phone number.
     *
     * @example 187****5620
     *
     * @var string
     */
    public $number;
    protected $_name = [
        'code'   => 'Code',
        'number' => 'Number',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        return $model;
    }
}
