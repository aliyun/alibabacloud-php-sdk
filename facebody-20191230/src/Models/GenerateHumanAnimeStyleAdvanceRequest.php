<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class GenerateHumanAnimeStyleAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $algoType;

    /**
     * @var Stream
     */
    public $imageURLObject;
    protected $_name = [
        'algoType' => 'AlgoType',
        'imageURLObject' => 'ImageURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algoType) {
            $res['AlgoType'] = $this->algoType;
        }

        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgoType'])) {
            $model->algoType = $map['AlgoType'];
        }

        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }

        return $model;
    }
}
