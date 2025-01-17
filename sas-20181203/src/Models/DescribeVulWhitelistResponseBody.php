<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulWhitelistResponseBody\vulWhitelists;

class DescribeVulWhitelistResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var vulWhitelists[]
     */
    public $vulWhitelists;
    protected $_name = [
        'count'         => 'Count',
        'currentPage'   => 'CurrentPage',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
        'vulWhitelists' => 'VulWhitelists',
    ];

    public function validate()
    {
        if (\is_array($this->vulWhitelists)) {
            Model::validateArray($this->vulWhitelists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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

        if (null !== $this->vulWhitelists) {
            if (\is_array($this->vulWhitelists)) {
                $res['VulWhitelists'] = [];
                $n1                   = 0;
                foreach ($this->vulWhitelists as $item1) {
                    $res['VulWhitelists'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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

        if (isset($map['VulWhitelists'])) {
            if (!empty($map['VulWhitelists'])) {
                $model->vulWhitelists = [];
                $n1                   = 0;
                foreach ($map['VulWhitelists'] as $item1) {
                    $model->vulWhitelists[$n1++] = vulWhitelists::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
