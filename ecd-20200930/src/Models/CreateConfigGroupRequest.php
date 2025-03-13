<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateConfigGroupRequest\configTimers;
use AlibabaCloud\Tea\Model;

class CreateConfigGroupRequest extends Model
{
    /**
     * @description The list of configuration groups.
     *
     * @var configTimers[]
     */
    public $configTimers;

    /**
     * @description The description of the configuration group.
     *
     * @example ScheduledTask
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the configuration group.
     *
     * This parameter is required.
     * @example ScheduledTask
     *
     * @var string
     */
    public $name;

    /**
     * @description The service type of the configuration group.
     *
     * Valid value:
     *
     *   CLOUD_DESKTOP: the cloud computer service.
     *
     * This parameter is required.
     * @example CLOUD_DESKTOP
     *
     * @var string
     */
    public $productType;

    /**
     * @description The ID of the region. Set the value to `cn-shanghai`.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the configuration group.
     *
     * Valid value:
     *
     *   Timer: the scheduled task type.
     *
     * This parameter is required.
     * @example Timer
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configTimers' => 'ConfigTimers',
        'description'  => 'Description',
        'name'         => 'Name',
        'productType'  => 'ProductType',
        'regionId'     => 'RegionId',
        'type'         => 'Type',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConfigGroupRequest
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
