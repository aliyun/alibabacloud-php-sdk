<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveRequestsResponseBody\data;

use AlibabaCloud\Dara\Model;

class infoCount extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'code' => 'Code',
        'count' => 'Count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
