<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeVSwitchesResponseBody\vSwitchs;

class DescribeVSwitchesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

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
     * @var vSwitchs[]
     */
    public $vSwitchs;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vSwitchs' => 'VSwitchs',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitchs)) {
            Model::validateArray($this->vSwitchs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->vSwitchs)) {
                $res['VSwitchs'] = [];
                $n1 = 0;
                foreach ($this->vSwitchs as $item1) {
                    $res['VSwitchs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['VSwitchs'] as $item1) {
                    $model->vSwitchs[$n1] = vSwitchs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
