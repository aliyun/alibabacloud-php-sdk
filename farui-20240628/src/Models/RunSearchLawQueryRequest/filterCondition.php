<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryRequest;

use AlibabaCloud\Dara\Model;

class filterCondition extends Model
{
    /**
     * @var string
     */
    public $lawName;
    protected $_name = [
        'lawName' => 'lawName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lawName) {
            $res['lawName'] = $this->lawName;
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
        if (isset($map['lawName'])) {
            $model->lawName = $map['lawName'];
        }

        return $model;
    }
}
