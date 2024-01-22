<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The auto scaling policies of the application.
     *
     * @var applicationScalingRules[]
     */
    public $applicationScalingRules;

    /**
     * @description The number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries returned on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of auto scaling policies.
     *
     * @example 3
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'applicationScalingRules' => 'ApplicationScalingRules',
        'currentPage'             => 'CurrentPage',
        'pageSize'                => 'PageSize',
        'totalSize'               => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationScalingRules) {
            $res['ApplicationScalingRules'] = [];
            if (null !== $this->applicationScalingRules && \is_array($this->applicationScalingRules)) {
                $n = 0;
                foreach ($this->applicationScalingRules as $item) {
                    $res['ApplicationScalingRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationScalingRules'])) {
            if (!empty($map['ApplicationScalingRules'])) {
                $model->applicationScalingRules = [];
                $n                              = 0;
                foreach ($map['ApplicationScalingRules'] as $item) {
                    $model->applicationScalingRules[$n++] = null !== $item ? applicationScalingRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
