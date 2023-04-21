<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListFilePermissionResponseBody extends Model
{
    /**
     * @var FilePermissionMember[]
     */
    public $filePermissions;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'filePermissions' => 'FilePermissions',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filePermissions) {
            $res['FilePermissions'] = [];
            if (null !== $this->filePermissions && \is_array($this->filePermissions)) {
                $n = 0;
                foreach ($this->filePermissions as $item) {
                    $res['FilePermissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFilePermissionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilePermissions'])) {
            if (!empty($map['FilePermissions'])) {
                $model->filePermissions = [];
                $n                      = 0;
                foreach ($map['FilePermissions'] as $item) {
                    $model->filePermissions[$n++] = null !== $item ? FilePermissionMember::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
