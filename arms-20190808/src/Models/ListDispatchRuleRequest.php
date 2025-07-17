<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListDispatchRuleRequest extends Model
{
    /**
     * @description The name of the notification policy. Fuzzy match is supported.
     *
     * @example Prod
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description *   The type of notification policies to be queried. Valid values: `false` (default): notification policies created in Application Real-Time Monitoring Service (ARMS).
     *   `true`: notification policies created in an external system.
     *
     * >  You cannot use the ARMS console to modify the dispatch rules of a notification policy that is created in an external system.
     *
     * @example true
     *
     * @var bool
     */
    public $system;
    protected $_name = [
        'name' => 'Name',
        'regionId' => 'RegionId',
        'system' => 'System',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->system) {
            $res['System'] = $this->system;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDispatchRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['System'])) {
            $model->system = $map['System'];
        }

        return $model;
    }
}
