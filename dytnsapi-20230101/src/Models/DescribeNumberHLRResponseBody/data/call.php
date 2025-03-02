<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20230101\Models\DescribeNumberHLRResponseBody\data;

use AlibabaCloud\Dara\Model;

class call extends Model
{
    /**
     * @var string
     */
    public $cleansedCode;
    /**
     * @var int
     */
    public $maxLength;
    /**
     * @var int
     */
    public $minLength;
    protected $_name = [
        'cleansedCode' => 'CleansedCode',
        'maxLength'    => 'MaxLength',
        'minLength'    => 'MinLength',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cleansedCode) {
            $res['CleansedCode'] = $this->cleansedCode;
        }

        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }

        if (null !== $this->minLength) {
            $res['MinLength'] = $this->minLength;
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
        if (isset($map['CleansedCode'])) {
            $model->cleansedCode = $map['CleansedCode'];
        }

        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }

        if (isset($map['MinLength'])) {
            $model->minLength = $map['MinLength'];
        }

        return $model;
    }
}
