<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedVulResponseBody\groupedVulItems;
use AlibabaCloud\Tea\Model;

class DescribeGroupedVulResponseBody extends Model
{
    /**
     * @description The number of entries to return on each page. Default value: 10.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The data returned.
     *
     * @var groupedVulItems[]
     */
    public $groupedVulItems;

    /**
     * @description The tag that is used to search for the vulnerabilities. Valid values:
     *
     *   Restart required
     *   Remote exploitation
     *   Exploit exists
     *   Exploitable
     *   Privilege escalation
     *   Code execution
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the asset group.
     *
     * @example 9BFA6D78-07EA-5C0A-9358-E4434573507B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The types of the vulnerabilities.
     *
     * > This parameter is valid only for application vulnerabilities and vulnerabilities that are detected based on software component analysis.
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage'     => 'CurrentPage',
        'groupedVulItems' => 'GroupedVulItems',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
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
        if (null !== $this->groupedVulItems) {
            $res['GroupedVulItems'] = [];
            if (null !== $this->groupedVulItems && \is_array($this->groupedVulItems)) {
                $n = 0;
                foreach ($this->groupedVulItems as $item) {
                    $res['GroupedVulItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupedVulResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['GroupedVulItems'])) {
            if (!empty($map['GroupedVulItems'])) {
                $model->groupedVulItems = [];
                $n                      = 0;
                foreach ($map['GroupedVulItems'] as $item) {
                    $model->groupedVulItems[$n++] = null !== $item ? groupedVulItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
