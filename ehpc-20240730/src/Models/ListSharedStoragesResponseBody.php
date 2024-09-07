<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSharedStoragesResponseBody\sharedStorages;
use AlibabaCloud\Tea\Model;

class ListSharedStoragesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example F6757FA4-8FED-4602-B7F5-3550C084****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the attached shared storage.
     *
     * @var sharedStorages[]
     */
    public $sharedStorages;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'requestId'      => 'RequestId',
        'sharedStorages' => 'SharedStorages',
        'success'        => 'Success',
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
        if (null !== $this->sharedStorages) {
            $res['SharedStorages'] = [];
            if (null !== $this->sharedStorages && \is_array($this->sharedStorages)) {
                $n = 0;
                foreach ($this->sharedStorages as $item) {
                    $res['SharedStorages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSharedStoragesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SharedStorages'])) {
            if (!empty($map['SharedStorages'])) {
                $model->sharedStorages = [];
                $n                     = 0;
                foreach ($map['SharedStorages'] as $item) {
                    $model->sharedStorages[$n++] = null !== $item ? sharedStorages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
