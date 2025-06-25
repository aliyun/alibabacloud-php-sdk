<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ListFilePermissionResponseBody extends Model
{
    /**
     * @var FilePermissionMember[]
     */
    public $filePermissions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'filePermissions' => 'FilePermissions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->filePermissions)) {
            Model::validateArray($this->filePermissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filePermissions) {
            if (\is_array($this->filePermissions)) {
                $res['FilePermissions'] = [];
                $n1 = 0;
                foreach ($this->filePermissions as $item1) {
                    $res['FilePermissions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FilePermissions'])) {
            if (!empty($map['FilePermissions'])) {
                $model->filePermissions = [];
                $n1 = 0;
                foreach ($map['FilePermissions'] as $item1) {
                    $model->filePermissions[$n1] = FilePermissionMember::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
