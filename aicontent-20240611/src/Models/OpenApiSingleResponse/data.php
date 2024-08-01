<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\OpenApiSingleResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example FINISHED
     *
     * @var string
     */
    public $modelTrainStatus;
    protected $_name = [
        'modelTrainStatus' => 'modelTrainStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelTrainStatus) {
            $res['modelTrainStatus'] = $this->modelTrainStatus;
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
        if (isset($map['modelTrainStatus'])) {
            $model->modelTrainStatus = $map['modelTrainStatus'];
        }

        return $model;
    }
}
