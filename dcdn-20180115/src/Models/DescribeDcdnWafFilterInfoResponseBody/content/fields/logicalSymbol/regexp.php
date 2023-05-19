<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content\fields\logicalSymbol;

use AlibabaCloud\Tea\Model;

class regexp extends Model
{
    /**
     * @description The error message returned because no items match the regular expression.
     *
     * @example Specify this field.
     *
     * @var string
     */
    public $errMsg;

    /**
     * @description The regular expression.
     *
     * @example ^\S+$
     *
     * @var string
     */
    public $pattern;
    protected $_name = [
        'errMsg'  => 'ErrMsg',
        'pattern' => 'Pattern',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regexp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }

        return $model;
    }
}
