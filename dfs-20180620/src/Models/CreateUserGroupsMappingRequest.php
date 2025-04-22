<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;

class CreateUserGroupsMappingRequest extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string[]
     */
    public $groupNames;

    /**
     * @var string
     */
    public $inputRegionId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'groupNames' => 'GroupNames',
        'inputRegionId' => 'InputRegionId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->groupNames)) {
            Model::validateArray($this->groupNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->groupNames) {
            if (\is_array($this->groupNames)) {
                $res['GroupNames'] = [];
                $n1 = 0;
                foreach ($this->groupNames as $item1) {
                    $res['GroupNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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

        if (isset($map['GroupNames'])) {
            if (!empty($map['GroupNames'])) {
                $model->groupNames = [];
                $n1 = 0;
                foreach ($map['GroupNames'] as $item1) {
                    $model->groupNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
