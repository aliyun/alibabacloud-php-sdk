<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteResponseBody\data\dubboRules\items;
use AlibabaCloud\Tea\Model;

class dubboRules extends Model
{
    /**
     * @description The relationship between the conditions in the canary release rule. Valid values:
     *
     * - **AND**: The conditions are in the logical AND relation. All conditions must be met at the same time.
     * - **OR**: The conditions are in the logical OR relation. At least one of the conditions must be met.
     * @example OR
     *
     * @var string
     */
    public $condition;

    /**
     * @description The group of the Dubbo service that corresponds to the canary release rule.
     *
     * @example DUBBO
     *
     * @var string
     */
    public $group;

    /**
     * @description The conditions.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The method name of the Dubbo service.
     *
     * @example echo
     *
     * @var string
     */
    public $methodName;

    /**
     * @description The name of the Dubbo service.
     *
     * @example com.alibaba.edas.boot.EchoService
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The version of the Dubbo service.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'condition'   => 'condition',
        'group'       => 'group',
        'items'       => 'items',
        'methodName'  => 'methodName',
        'serviceName' => 'serviceName',
        'version'     => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }
        if (null !== $this->group) {
            $res['group'] = $this->group;
        }
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->methodName) {
            $res['methodName'] = $this->methodName;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dubboRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }
        if (isset($map['group'])) {
            $model->group = $map['group'];
        }
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['methodName'])) {
            $model->methodName = $map['methodName'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
