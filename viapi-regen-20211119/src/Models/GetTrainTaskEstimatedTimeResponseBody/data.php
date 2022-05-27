<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetTrainTaskEstimatedTimeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $estimatedTime;
    protected $_name = [
        'estimatedTime' => 'EstimatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->estimatedTime) {
            $res['EstimatedTime'] = $this->estimatedTime;
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
        if (isset($map['EstimatedTime'])) {
            $model->estimatedTime = $map['EstimatedTime'];
        }

        return $model;
    }
}
