<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSharedStoragesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSharedStoragesResponseBody\sharedStorages\mountInfo;

class sharedStorages extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var string
     */
    public $fileSystemProtocol;
    /**
     * @var string
     */
    public $fileSystemType;
    /**
     * @var mountInfo[]
     */
    public $mountInfo;
    protected $_name = [
        'fileSystemId'       => 'FileSystemId',
        'fileSystemProtocol' => 'FileSystemProtocol',
        'fileSystemType'     => 'FileSystemType',
        'mountInfo'          => 'MountInfo',
    ];

    public function validate()
    {
        if (\is_array($this->mountInfo)) {
            Model::validateArray($this->mountInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->fileSystemProtocol) {
            $res['FileSystemProtocol'] = $this->fileSystemProtocol;
        }

        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }

        if (null !== $this->mountInfo) {
            if (\is_array($this->mountInfo)) {
                $res['MountInfo'] = [];
                $n1               = 0;
                foreach ($this->mountInfo as $item1) {
                    $res['MountInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['FileSystemProtocol'])) {
            $model->fileSystemProtocol = $map['FileSystemProtocol'];
        }

        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }

        if (isset($map['MountInfo'])) {
            if (!empty($map['MountInfo'])) {
                $model->mountInfo = [];
                $n1               = 0;
                foreach ($map['MountInfo'] as $item1) {
                    $model->mountInfo[$n1++] = mountInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
