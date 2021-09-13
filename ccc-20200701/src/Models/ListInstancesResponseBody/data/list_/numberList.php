<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListInstancesResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class numberList extends Model
{
    /**
     * @var string
     */
    public $number;
    protected $_name = [
        'number' => 'Number',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return numberList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        return $model;
    }
}
