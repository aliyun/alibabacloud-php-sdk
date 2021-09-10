<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsResponseBody\data\reminds;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @var int
     */
    public $totalCount;

    /**
     * @var reminds[]
     */
    public $reminds;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
        'reminds'    => 'Reminds',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->reminds) {
            $res['Reminds'] = [];
            if (null !== $this->reminds && \is_array($this->reminds)) {
                $n = 0;
                foreach ($this->reminds as $item) {
                    $res['Reminds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Reminds'])) {
            if (!empty($map['Reminds'])) {
                $model->reminds = [];
                $n              = 0;
                foreach ($map['Reminds'] as $item) {
                    $model->reminds[$n++] = null !== $item ? reminds::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
