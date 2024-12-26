<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryRequest;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lawName) {
            $res['lawName'] = $this->lawName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterCondition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['lawName'])) {
            $model->lawName = $map['lawName'];
        }

        return $model;
    }
}
