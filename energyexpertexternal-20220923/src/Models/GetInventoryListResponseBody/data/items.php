<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetInventoryListResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description Emission quantity: may be positive, negative, or 0. To ensure the calculation accuracy, 24 decimal places are reserved for the calculation process. We recommend that you intercept data based on your business requirements.
     *
     * @example 1000.000000000000000000000000000000
     *
     * @var float
     */
    public $carbonEmission;

    /**
     * @description Name
     *
     * > The name is related to the request parameters group. Request parameters: resource, return name parameter meaning: list name; request parameters: process, return name parameter meaning: process name; request parameters: resourceType, return name parameter meaning: inventory resource type name; request parameters: processType, return name parameter meaning: flow name.
     * @example Energy
     *
     * @var string
     */
    public $name;

    /**
     * @description Percentage
     *
     * @example 99.01
     *
     * @var string
     */
    public $percent;

    /**
     * @description Process Name: It is only meaningful when the request parameters group is resource.
     *
     * @example Process-1
     *
     * @var string
     */
    public $processName;
    protected $_name = [
        'carbonEmission' => 'carbonEmission',
        'name'           => 'name',
        'percent'        => 'percent',
        'processName'    => 'processName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carbonEmission) {
            $res['carbonEmission'] = $this->carbonEmission;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->percent) {
            $res['percent'] = $this->percent;
        }
        if (null !== $this->processName) {
            $res['processName'] = $this->processName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['carbonEmission'])) {
            $model->carbonEmission = $map['carbonEmission'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['percent'])) {
            $model->percent = $map['percent'];
        }
        if (isset($map['processName'])) {
            $model->processName = $map['processName'];
        }

        return $model;
    }
}
