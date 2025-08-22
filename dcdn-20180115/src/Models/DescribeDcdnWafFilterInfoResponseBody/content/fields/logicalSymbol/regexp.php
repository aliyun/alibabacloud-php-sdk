<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content\fields\logicalSymbol;

use AlibabaCloud\Dara\Model;

class regexp extends Model
{
    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $pattern;
    protected $_name = [
        'errMsg' => 'ErrMsg',
        'pattern' => 'Pattern',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
