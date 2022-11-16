<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Models\RecognizeFurnitureSpuResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $predCate;

    /**
     * @var string
     */
    public $predCateId;

    /**
     * @var float
     */
    public $predProbability;
    protected $_name = [
        'predCate'        => 'PredCate',
        'predCateId'      => 'PredCateId',
        'predProbability' => 'PredProbability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->predCate) {
            $res['PredCate'] = $this->predCate;
        }
        if (null !== $this->predCateId) {
            $res['PredCateId'] = $this->predCateId;
        }
        if (null !== $this->predProbability) {
            $res['PredProbability'] = $this->predProbability;
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
        if (isset($map['PredCate'])) {
            $model->predCate = $map['PredCate'];
        }
        if (isset($map['PredCateId'])) {
            $model->predCateId = $map['PredCateId'];
        }
        if (isset($map['PredProbability'])) {
            $model->predProbability = $map['PredProbability'];
        }

        return $model;
    }
}
