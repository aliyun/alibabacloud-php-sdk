<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityResponseBody\data\faceRecognizeResults;

class data extends Model
{
    /**
     * @var faceRecognizeResults[]
     */
    public $faceRecognizeResults;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'faceRecognizeResults' => 'FaceRecognizeResults',
        'height' => 'Height',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (\is_array($this->faceRecognizeResults)) {
            Model::validateArray($this->faceRecognizeResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceRecognizeResults) {
            if (\is_array($this->faceRecognizeResults)) {
                $res['FaceRecognizeResults'] = [];
                $n1 = 0;
                foreach ($this->faceRecognizeResults as $item1) {
                    $res['FaceRecognizeResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['FaceRecognizeResults'])) {
            if (!empty($map['FaceRecognizeResults'])) {
                $model->faceRecognizeResults = [];
                $n1 = 0;
                foreach ($map['FaceRecognizeResults'] as $item1) {
                    $model->faceRecognizeResults[$n1] = faceRecognizeResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
