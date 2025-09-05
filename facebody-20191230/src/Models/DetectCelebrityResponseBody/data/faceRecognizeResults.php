<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityResponseBody\data;

use AlibabaCloud\Dara\Model;

class faceRecognizeResults extends Model
{
    /**
     * @var float[]
     */
    public $faceBoxes;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'faceBoxes' => 'FaceBoxes',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->faceBoxes)) {
            Model::validateArray($this->faceBoxes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceBoxes) {
            if (\is_array($this->faceBoxes)) {
                $res['FaceBoxes'] = [];
                $n1 = 0;
                foreach ($this->faceBoxes as $item1) {
                    $res['FaceBoxes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['FaceBoxes'])) {
            if (!empty($map['FaceBoxes'])) {
                $model->faceBoxes = [];
                $n1 = 0;
                foreach ($map['FaceBoxes'] as $item1) {
                    $model->faceBoxes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
