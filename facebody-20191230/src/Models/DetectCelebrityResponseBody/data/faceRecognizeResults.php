<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityResponseBody\data;

use AlibabaCloud\Tea\Model;

class faceRecognizeResults extends Model
{
    /**
     * @description 1
     *
     * @var float[]
     */
    public $faceBoxes;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'faceBoxes' => 'FaceBoxes',
        'name'      => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceBoxes) {
            $res['FaceBoxes'] = $this->faceBoxes;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceRecognizeResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceBoxes'])) {
            if (!empty($map['FaceBoxes'])) {
                $model->faceBoxes = $map['FaceBoxes'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
