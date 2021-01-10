<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models\PredictPictureResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $predictResult;
    protected $_name = [
        'predictResult' => 'PredictResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->predictResult) {
            $res['PredictResult'] = $this->predictResult;
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
        if (isset($map['PredictResult'])) {
            $model->predictResult = $map['PredictResult'];
        }

        return $model;
    }
}
