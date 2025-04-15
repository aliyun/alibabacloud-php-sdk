<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules;

class data extends Model
{
    /**
     * @var applicationScalingRules[]
     */
    public $applicationScalingRules;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'applicationScalingRules' => 'ApplicationScalingRules',
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'totalSize' => 'TotalSize',
    ];

    public function validate()
    {
        if (\is_array($this->applicationScalingRules)) {
            Model::validateArray($this->applicationScalingRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationScalingRules) {
            if (\is_array($this->applicationScalingRules)) {
                $res['ApplicationScalingRules'] = [];
                $n1 = 0;
                foreach ($this->applicationScalingRules as $item1) {
                    $res['ApplicationScalingRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationScalingRules'])) {
            if (!empty($map['ApplicationScalingRules'])) {
                $model->applicationScalingRules = [];
                $n1 = 0;
                foreach ($map['ApplicationScalingRules'] as $item1) {
                    $model->applicationScalingRules[$n1++] = applicationScalingRules::fromMap($item1);
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
