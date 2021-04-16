<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\RecognizeImageResponseBody;

use AlibabaCloud\SDK\CDRS\V20201101\Models\RecognizeImageResponseBody\data\bodyList;
use AlibabaCloud\SDK\CDRS\V20201101\Models\RecognizeImageResponseBody\data\faceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bodyList[]
     */
    public $bodyList;

    /**
     * @var faceList[]
     */
    public $faceList;
    protected $_name = [
        'bodyList' => 'BodyList',
        'faceList' => 'FaceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyList) {
            $res['BodyList'] = [];
            if (null !== $this->bodyList && \is_array($this->bodyList)) {
                $n = 0;
                foreach ($this->bodyList as $item) {
                    $res['BodyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->faceList) {
            $res['FaceList'] = [];
            if (null !== $this->faceList && \is_array($this->faceList)) {
                $n = 0;
                foreach ($this->faceList as $item) {
                    $res['FaceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['BodyList'])) {
            if (!empty($map['BodyList'])) {
                $model->bodyList = [];
                $n               = 0;
                foreach ($map['BodyList'] as $item) {
                    $model->bodyList[$n++] = null !== $item ? bodyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FaceList'])) {
            if (!empty($map['FaceList'])) {
                $model->faceList = [];
                $n               = 0;
                foreach ($map['FaceList'] as $item) {
                    $model->faceList[$n++] = null !== $item ? faceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
