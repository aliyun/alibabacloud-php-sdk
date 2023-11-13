<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefenseObjectsResponseBody\objects;
use AlibabaCloud\Tea\Model;

class DescribeSceneDefenseObjectsResponseBody extends Model
{
    /**
     * @description The information about the protected assets.
     *
     * @var objects[]
     */
    public $objects;

    /**
     * @description The ID of the request.
     *
     * @example FE07E73F-F19E-4A51-B62F-AC59E3B962D8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'objects'   => 'Objects',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objects) {
            $res['Objects'] = [];
            if (null !== $this->objects && \is_array($this->objects)) {
                $n = 0;
                foreach ($this->objects as $item) {
                    $res['Objects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSceneDefenseObjectsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Objects'])) {
            if (!empty($map['Objects'])) {
                $model->objects = [];
                $n              = 0;
                foreach ($map['Objects'] as $item) {
                    $model->objects[$n++] = null !== $item ? objects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
