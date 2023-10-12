<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\Module\device;
use AlibabaCloud\SDK\Cmn\V20200825\Models\Module\moduleDetails;
use AlibabaCloud\Tea\Model;

class Module extends Model
{
    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @var device
     */
    public $device;

    /**
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $id;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $minCount;

    /**
     * @var moduleDetails[]
     */
    public $moduleDetails;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @example 根模块/单角色模块/组合模块
     *
     * @var string
     */
    public $moduleType;

    /**
     * @example asw-2*25G
     *
     * @var string
     */
    public $name;

    /**
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $parentModuleId;

    /**
     * @example true
     *
     * @var bool
     */
    public $stack;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'device'         => 'Device',
        'id'             => 'Id',
        'maxCount'       => 'MaxCount',
        'minCount'       => 'MinCount',
        'moduleDetails'  => 'ModuleDetails',
        'moduleId'       => 'ModuleId',
        'moduleType'     => 'ModuleType',
        'name'           => 'Name',
        'parentModuleId' => 'ParentModuleId',
        'stack'          => 'Stack',
        'updateTime'     => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->device) {
            $res['Device'] = null !== $this->device ? $this->device->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }
        if (null !== $this->minCount) {
            $res['MinCount'] = $this->minCount;
        }
        if (null !== $this->moduleDetails) {
            $res['ModuleDetails'] = [];
            if (null !== $this->moduleDetails && \is_array($this->moduleDetails)) {
                $n = 0;
                foreach ($this->moduleDetails as $item) {
                    $res['ModuleDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->moduleType) {
            $res['ModuleType'] = $this->moduleType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentModuleId) {
            $res['ParentModuleId'] = $this->parentModuleId;
        }
        if (null !== $this->stack) {
            $res['Stack'] = $this->stack;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Device'])) {
            $model->device = device::fromMap($map['Device']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }
        if (isset($map['MinCount'])) {
            $model->minCount = $map['MinCount'];
        }
        if (isset($map['ModuleDetails'])) {
            if (!empty($map['ModuleDetails'])) {
                $model->moduleDetails = [];
                $n                    = 0;
                foreach ($map['ModuleDetails'] as $item) {
                    $model->moduleDetails[$n++] = null !== $item ? moduleDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ModuleType'])) {
            $model->moduleType = $map['ModuleType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentModuleId'])) {
            $model->parentModuleId = $map['ParentModuleId'];
        }
        if (isset($map['Stack'])) {
            $model->stack = $map['Stack'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
