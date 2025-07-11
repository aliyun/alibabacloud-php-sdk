<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyConfigGroupRequest extends Model
{
    /**
     * @description The description of the configuration group.
     *
     * @example ScheduledTask
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the configuration group.
     *
     * This parameter is required.
     *
     * @example cg-i1ruuudp92qpj****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the configuration group.
     *
     * @example ScheduledTask
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
        'description' => 'Description',
        'groupId' => 'GroupId',
        'name' => 'Name',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return ModifyConfigGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
