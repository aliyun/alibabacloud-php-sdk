<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeleteNASFileSystemsRequest extends Model
{
    /**
     * @var string[]
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->fileSystemId)) {
            Model::validateArray($this->fileSystemId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            if (\is_array($this->fileSystemId)) {
                $res['FileSystemId'] = [];
                $n1 = 0;
                foreach ($this->fileSystemId as $item1) {
                    $res['FileSystemId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
            if (!empty($map['FileSystemId'])) {
                $model->fileSystemId = [];
                $n1 = 0;
                foreach ($map['FileSystemId'] as $item1) {
                    $model->fileSystemId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
