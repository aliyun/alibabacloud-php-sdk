<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAccountsResponseBody\items\eventCount;

use AlibabaCloud\Tea\Model;

class total extends Model
{
    /**
     * @var int
     */
    public $excludeCount;

    /**
     * @var int
     */
    public $confirmCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $undealCount;
    protected $_name = [
        'excludeCount' => 'ExcludeCount',
        'confirmCount' => 'ConfirmCount',
        'totalCount'   => 'TotalCount',
        'undealCount'  => 'UndealCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeCount) {
            $res['ExcludeCount'] = $this->excludeCount;
        }
        if (null !== $this->confirmCount) {
            $res['ConfirmCount'] = $this->confirmCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->undealCount) {
            $res['UndealCount'] = $this->undealCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return total
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeCount'])) {
            $model->excludeCount = $map['ExcludeCount'];
        }
        if (isset($map['ConfirmCount'])) {
            $model->confirmCount = $map['ConfirmCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UndealCount'])) {
            $model->undealCount = $map['UndealCount'];
        }

        return $model;
    }
}
