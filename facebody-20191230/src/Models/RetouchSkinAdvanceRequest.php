<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class RetouchSkinAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var float
     */
    public $retouchDegree;

    /**
     * @var float
     */
    public $whiteningDegree;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'retouchDegree' => 'RetouchDegree',
        'whiteningDegree' => 'WhiteningDegree',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }

        if (null !== $this->retouchDegree) {
            $res['RetouchDegree'] = $this->retouchDegree;
        }

        if (null !== $this->whiteningDegree) {
            $res['WhiteningDegree'] = $this->whiteningDegree;
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
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }

        if (isset($map['RetouchDegree'])) {
            $model->retouchDegree = $map['RetouchDegree'];
        }

        if (isset($map['WhiteningDegree'])) {
            $model->whiteningDegree = $map['WhiteningDegree'];
        }

        return $model;
    }
}
