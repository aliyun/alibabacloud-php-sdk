<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityResponseBody\data\faceRecognizeResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var faceRecognizeResults[]
     */
    public $faceRecognizeResults;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;
    protected $_name = [
        'faceRecognizeResults' => 'FaceRecognizeResults',
        'width'                => 'Width',
        'height'               => 'Height',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceRecognizeResults) {
            $res['FaceRecognizeResults'] = [];
            if (null !== $this->faceRecognizeResults && \is_array($this->faceRecognizeResults)) {
                $n = 0;
                foreach ($this->faceRecognizeResults as $item) {
                    $res['FaceRecognizeResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
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
        if (isset($map['FaceRecognizeResults'])) {
            if (!empty($map['FaceRecognizeResults'])) {
                $model->faceRecognizeResults = [];
                $n                           = 0;
                foreach ($map['FaceRecognizeResults'] as $item) {
                    $model->faceRecognizeResults[$n++] = null !== $item ? faceRecognizeResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        return $model;
    }
}
