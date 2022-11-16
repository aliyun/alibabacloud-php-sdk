<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectLivingFaceResponseBody\data;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectLivingFaceResponseBody\data\elements\results;
use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var int
     */
    public $faceNumber;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'faceNumber' => 'FaceNumber',
        'imageURL'   => 'ImageURL',
        'results'    => 'Results',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceNumber) {
            $res['FaceNumber'] = $this->faceNumber;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceNumber'])) {
            $model->faceNumber = $map['FaceNumber'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
