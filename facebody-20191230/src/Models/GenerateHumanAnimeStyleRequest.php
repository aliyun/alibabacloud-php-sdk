<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class GenerateHumanAnimeStyleRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $algoType;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'algoType' => 'AlgoType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->algoType) {
            $res['AlgoType'] = $this->algoType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateHumanAnimeStyleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['AlgoType'])) {
            $model->algoType = $map['AlgoType'];
        }

        return $model;
    }
}
