<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitorGroupDynamicRuleRequest\groupRules;
use AlibabaCloud\Tea\Model;

class PutMonitorGroupDynamicRuleRequest extends Model
{
    /**
     * @description The method that is used to filter instances. Valid values of N: 1 to 3. Valid values:
     *
     *   contains: contains
     *   notContains: excludes
     *   startWith: starts with a prefix
     *   endWith: ends with a suffix
     *
     * @example 123456
     *
     * @var int
     */
    public $groupId;

    /**
     * @var groupRules[]
     */
    public $groupRules;

    /**
     * @description The ID of the application group.
     *
     * @example false
     *
     * @var bool
     */
    public $isAsync;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'groupId'    => 'GroupId',
        'groupRules' => 'GroupRules',
        'isAsync'    => 'IsAsync',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupRules) {
            $res['GroupRules'] = [];
            if (null !== $this->groupRules && \is_array($this->groupRules)) {
                $n = 0;
                foreach ($this->groupRules as $item) {
                    $res['GroupRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isAsync) {
            $res['IsAsync'] = $this->isAsync;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutMonitorGroupDynamicRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupRules'])) {
            if (!empty($map['GroupRules'])) {
                $model->groupRules = [];
                $n                 = 0;
                foreach ($map['GroupRules'] as $item) {
                    $model->groupRules[$n++] = null !== $item ? groupRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsAsync'])) {
            $model->isAsync = $map['IsAsync'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
