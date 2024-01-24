<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeVSwitchesResponseBody\vSwitchs;
use AlibabaCloud\Tea\Model;

class DescribeVSwitchesResponseBody extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 9A572171-4E27-40D1-BD36-D26C9E71E29E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of returned entries.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The details of the vSwitch.
     *
     * @var vSwitchs[]
     */
    public $vSwitchs;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'vSwitchs'   => 'VSwitchs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
        if (null !== $this->vSwitchs) {
            $res['VSwitchs'] = [];
            if (null !== $this->vSwitchs && \is_array($this->vSwitchs)) {
                $n = 0;
                foreach ($this->vSwitchs as $item) {
                    $res['VSwitchs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVSwitchesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
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
        if (isset($map['VSwitchs'])) {
            if (!empty($map['VSwitchs'])) {
                $model->vSwitchs = [];
                $n               = 0;
                foreach ($map['VSwitchs'] as $item) {
                    $model->vSwitchs[$n++] = null !== $item ? vSwitchs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
