<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitUasResponseBody;

use AlibabaCloud\Dara\Model;

class uas extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $ua;
    protected $_name = [
        'count' => 'Count',
        'ua' => 'Ua',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->ua) {
            $res['Ua'] = $this->ua;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Ua'])) {
            $model->ua = $map['Ua'];
        }

        return $model;
    }
}
