<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyTimerGroupRequest\configTimers;
use AlibabaCloud\Tea\Model;

class ModifyTimerGroupRequest extends Model
{
    /**
     * @description The configuration groups.
     *
     * @var configTimers[]
     */
    public $configTimers;

    /**
     * @description The description of the configuration group.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the configuration group.
     *
     * This parameter is required.
     * @example cg-i1ruuudp92qpj****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the configuration group.
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region. Set the value to `cn-shanghai`.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'configTimers' => 'ConfigTimers',
        'description'  => 'Description',
        'groupId'      => 'GroupId',
        'name'         => 'Name',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configTimers) {
            $res['ConfigTimers'] = [];
            if (null !== $this->configTimers && \is_array($this->configTimers)) {
                $n = 0;
                foreach ($this->configTimers as $item) {
                    $res['ConfigTimers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTimerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigTimers'])) {
            if (!empty($map['ConfigTimers'])) {
                $model->configTimers = [];
                $n                   = 0;
                foreach ($map['ConfigTimers'] as $item) {
                    $model->configTimers[$n++] = null !== $item ? configTimers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
