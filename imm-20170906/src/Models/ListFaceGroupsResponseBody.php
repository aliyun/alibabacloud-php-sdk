<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\ListFaceGroupsResponseBody\faceGroups;
use AlibabaCloud\Tea\Model;

class ListFaceGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextMarker;

    /**
     * @var faceGroups[]
     */
    public $faceGroups;
    protected $_name = [
        'requestId'  => 'RequestId',
        'nextMarker' => 'NextMarker',
        'faceGroups' => 'FaceGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextMarker) {
            $res['NextMarker'] = $this->nextMarker;
        }
        if (null !== $this->faceGroups) {
            $res['FaceGroups'] = [];
            if (null !== $this->faceGroups && \is_array($this->faceGroups)) {
                $n = 0;
                foreach ($this->faceGroups as $item) {
                    $res['FaceGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFaceGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextMarker'])) {
            $model->nextMarker = $map['NextMarker'];
        }
        if (isset($map['FaceGroups'])) {
            if (!empty($map['FaceGroups'])) {
                $model->faceGroups = [];
                $n                 = 0;
                foreach ($map['FaceGroups'] as $item) {
                    $model->faceGroups[$n++] = null !== $item ? faceGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
