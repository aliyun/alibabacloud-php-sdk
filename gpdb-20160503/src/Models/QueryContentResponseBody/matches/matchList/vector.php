<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\matches\matchList;

use AlibabaCloud\Tea\Model;

class vector extends Model
{
    /**
     * @var float[]
     */
    public $vectorList;
    protected $_name = [
        'vectorList' => 'VectorList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vectorList) {
            $res['VectorList'] = $this->vectorList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vector
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VectorList'])) {
            if (!empty($map['VectorList'])) {
                $model->vectorList = $map['VectorList'];
            }
        }

        return $model;
    }
}
