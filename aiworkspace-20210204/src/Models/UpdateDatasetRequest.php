<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class UpdateDatasetRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $mountAccessReadWriteRoleIdList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $options;
    protected $_name = [
        'description' => 'Description',
        'mountAccessReadWriteRoleIdList' => 'MountAccessReadWriteRoleIdList',
        'name' => 'Name',
        'options' => 'Options',
    ];

    public function validate()
    {
        if (\is_array($this->mountAccessReadWriteRoleIdList)) {
            Model::validateArray($this->mountAccessReadWriteRoleIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->mountAccessReadWriteRoleIdList) {
            if (\is_array($this->mountAccessReadWriteRoleIdList)) {
                $res['MountAccessReadWriteRoleIdList'] = [];
                $n1 = 0;
                foreach ($this->mountAccessReadWriteRoleIdList as $item1) {
                    $res['MountAccessReadWriteRoleIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MountAccessReadWriteRoleIdList'])) {
            if (!empty($map['MountAccessReadWriteRoleIdList'])) {
                $model->mountAccessReadWriteRoleIdList = [];
                $n1 = 0;
                foreach ($map['MountAccessReadWriteRoleIdList'] as $item1) {
                    $model->mountAccessReadWriteRoleIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        return $model;
    }
}
