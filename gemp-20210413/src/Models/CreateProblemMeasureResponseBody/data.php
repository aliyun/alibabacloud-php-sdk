<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemMeasureResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1231
     *
     * @var int
     */
    public $measureId;
    protected $_name = [
        'measureId' => 'measureId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->measureId) {
            $res['measureId'] = $this->measureId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['measureId'])) {
            $model->measureId = $map['measureId'];
        }

        return $model;
    }
}
