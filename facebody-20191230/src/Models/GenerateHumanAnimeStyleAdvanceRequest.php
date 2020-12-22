<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class GenerateHumanAnimeStyleAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var string
     */
    public $algoType;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'algoType'       => 'AlgoType',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->algoType) {
            $res['AlgoType'] = $this->algoType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateHumanAnimeStyleAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['AlgoType'])) {
            $model->algoType = $map['AlgoType'];
        }

        return $model;
    }
}
