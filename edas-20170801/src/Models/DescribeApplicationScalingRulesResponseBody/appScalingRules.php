<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesResponseBody\appScalingRules\result;
use AlibabaCloud\Tea\Model;

class appScalingRules extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of auto scaling policies returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The information about auto scaling policies.
     *
     * @var result[]
     */
    public $result;

    /**
     * @description The total number of auto scaling policies.
     *
     * @example 20
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'result'      => 'Result',
        'totalSize'   => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appScalingRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
