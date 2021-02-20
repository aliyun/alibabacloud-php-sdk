<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\SDK\Avds\V20171129\Models\ListUserOrganizationsResponseBody\organizations;
use AlibabaCloud\Tea\Model;

class ListUserOrganizationsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
    public $currentPage;

    /**
     * @var organizations[]
     */
    public $organizations;
    protected $_name = [
        'totalCount'    => 'TotalCount',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'currentPage'   => 'CurrentPage',
        'organizations' => 'Organizations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->organizations) {
            $res['Organizations'] = [];
            if (null !== $this->organizations && \is_array($this->organizations)) {
                $n = 0;
                foreach ($this->organizations as $item) {
                    $res['Organizations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserOrganizationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Organizations'])) {
            if (!empty($map['Organizations'])) {
                $model->organizations = [];
                $n                    = 0;
                foreach ($map['Organizations'] as $item) {
                    $model->organizations[$n++] = null !== $item ? organizations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
