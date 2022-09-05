<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListDispatchRuleRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $system;
    protected $_name = [
        'name'     => 'Name',
        'regionId' => 'RegionId',
        'system'   => 'System',
    ];

    public function validate()
    {
    }

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
