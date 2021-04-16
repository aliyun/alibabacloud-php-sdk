<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\SearchObjectResponseBody;

use AlibabaCloud\SDK\CDRS\V20201101\Models\SearchObjectResponseBody\data\bodyList;
use AlibabaCloud\SDK\CDRS\V20201101\Models\SearchObjectResponseBody\data\faceList;
use AlibabaCloud\SDK\CDRS\V20201101\Models\SearchObjectResponseBody\data\motorList;
use AlibabaCloud\SDK\CDRS\V20201101\Models\SearchObjectResponseBody\data\nonMotorList;
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

    /**
     * @var motorList[]
     */
    public $motorList;

    /**
     * @var nonMotorList[]
     */
    public $nonMotorList;
    protected $_name = [
        'bodyList'     => 'BodyList',
        'faceList'     => 'FaceList',
        'motorList'    => 'MotorList',
        'nonMotorList' => 'NonMotorList',
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
        if (null !== $this->motorList) {
            $res['MotorList'] = [];
            if (null !== $this->motorList && \is_array($this->motorList)) {
                $n = 0;
                foreach ($this->motorList as $item) {
                    $res['MotorList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nonMotorList) {
            $res['NonMotorList'] = [];
            if (null !== $this->nonMotorList && \is_array($this->nonMotorList)) {
                $n = 0;
                foreach ($this->nonMotorList as $item) {
                    $res['NonMotorList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['MotorList'])) {
            if (!empty($map['MotorList'])) {
                $model->motorList = [];
                $n                = 0;
                foreach ($map['MotorList'] as $item) {
                    $model->motorList[$n++] = null !== $item ? motorList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NonMotorList'])) {
            if (!empty($map['NonMotorList'])) {
                $model->nonMotorList = [];
                $n                   = 0;
                foreach ($map['NonMotorList'] as $item) {
                    $model->nonMotorList[$n++] = null !== $item ? nonMotorList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
