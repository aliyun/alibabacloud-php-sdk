<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\SDK\Ivision\V20190308\Models\SearchFaceResponseBody\faceResults;
use AlibabaCloud\SDK\Ivision\V20190308\Models\SearchFaceResponseBody\rect;
use AlibabaCloud\Tea\Model;

class SearchFaceResponseBody extends Model
{
    /**
     * @var rect
     */
    public $rect;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var faceResults[]
     */
    public $faceResults;

    /**
     * @var string
     */
    public $groupId;
    protected $_name = [
        'rect'        => 'Rect',
        'requestId'   => 'RequestId',
        'faceResults' => 'FaceResults',
        'groupId'     => 'GroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rect) {
            $res['Rect'] = null !== $this->rect ? $this->rect->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->faceResults) {
            $res['FaceResults'] = [];
            if (null !== $this->faceResults && \is_array($this->faceResults)) {
                $n = 0;
                foreach ($this->faceResults as $item) {
                    $res['FaceResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchFaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rect'])) {
            $model->rect = rect::fromMap($map['Rect']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FaceResults'])) {
            if (!empty($map['FaceResults'])) {
                $model->faceResults = [];
                $n                  = 0;
                foreach ($map['FaceResults'] as $item) {
                    $model->faceResults[$n++] = null !== $item ? faceResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
