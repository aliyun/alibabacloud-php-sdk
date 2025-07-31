<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateComputeSourceRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateComputeSourceRequest\updateCommand\configList;
use AlibabaCloud\Tea\Model;

class updateCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var configList[]
     */
    public $configList;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 102311
     *
     * @var int
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example test1021
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example MacCompute
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configList' => 'ConfigList',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configList) {
            $res['ConfigList'] = [];
            if (null !== $this->configList && \is_array($this->configList)) {
                $n = 0;
                foreach ($this->configList as $item) {
                    $res['ConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigList'])) {
            if (!empty($map['ConfigList'])) {
                $model->configList = [];
                $n = 0;
                foreach ($map['ConfigList'] as $item) {
                    $model->configList[$n++] = null !== $item ? configList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
