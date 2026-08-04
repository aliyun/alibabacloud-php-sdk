<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountTrueNameResponseBody;

use AlibabaCloud\Dara\Model;

class profileInfo extends Model
{
    /**
     * @var string
     */
    public $trueName;
    protected $_name = [
        'trueName' => 'TrueName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trueName) {
            $res['TrueName'] = $this->trueName;
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
        if (isset($map['TrueName'])) {
            $model->trueName = $map['TrueName'];
        }

        return $model;
    }
}
