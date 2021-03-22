<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models;

use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeProtectionModuleRulesResponseBody\moduleRules;
use AlibabaCloud\Tea\Model;

class DescribeProtectionModuleRulesResponseBody extends Model
{
    /**
     * @var moduleRules[]
     */
    public $moduleRules;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $taskStatus;
    protected $_name = [
        'moduleRules' => 'ModuleRules',
        'requestId'   => 'RequestId',
        'total'       => 'Total',
        'taskStatus'  => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleRules) {
            $res['ModuleRules'] = [];
            if (null !== $this->moduleRules && \is_array($this->moduleRules)) {
                $n = 0;
                foreach ($this->moduleRules as $item) {
                    $res['ModuleRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProtectionModuleRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleRules'])) {
            if (!empty($map['ModuleRules'])) {
                $model->moduleRules = [];
                $n                  = 0;
                foreach ($map['ModuleRules'] as $item) {
                    $model->moduleRules[$n++] = null !== $item ? moduleRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
