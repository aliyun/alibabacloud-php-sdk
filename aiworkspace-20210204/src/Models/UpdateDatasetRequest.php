<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetRequest\sharingConfig;

class UpdateDatasetRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $edition;

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

    /**
     * @var sharingConfig
     */
    public $sharingConfig;
    protected $_name = [
        'description' => 'Description',
        'edition' => 'Edition',
        'mountAccessReadWriteRoleIdList' => 'MountAccessReadWriteRoleIdList',
        'name' => 'Name',
        'options' => 'Options',
        'sharingConfig' => 'SharingConfig',
    ];

    public function validate()
    {
        if (\is_array($this->mountAccessReadWriteRoleIdList)) {
            Model::validateArray($this->mountAccessReadWriteRoleIdList);
        }
        if (null !== $this->sharingConfig) {
            $this->sharingConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }

        if (null !== $this->mountAccessReadWriteRoleIdList) {
            if (\is_array($this->mountAccessReadWriteRoleIdList)) {
                $res['MountAccessReadWriteRoleIdList'] = [];
                $n1 = 0;
                foreach ($this->mountAccessReadWriteRoleIdList as $item1) {
                    $res['MountAccessReadWriteRoleIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->sharingConfig) {
            $res['SharingConfig'] = null !== $this->sharingConfig ? $this->sharingConfig->toArray($noStream) : $this->sharingConfig;
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

        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }

        if (isset($map['MountAccessReadWriteRoleIdList'])) {
            if (!empty($map['MountAccessReadWriteRoleIdList'])) {
                $model->mountAccessReadWriteRoleIdList = [];
                $n1 = 0;
                foreach ($map['MountAccessReadWriteRoleIdList'] as $item1) {
                    $model->mountAccessReadWriteRoleIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['SharingConfig'])) {
            $model->sharingConfig = sharingConfig::fromMap($map['SharingConfig']);
        }

        return $model;
    }
}
