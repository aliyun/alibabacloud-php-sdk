<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineStatusesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineStatusesResponseBody\data\baselineStatuses;

class data extends Model
{
    /**
     * @var baselineStatuses[]
     */
    public $baselineStatuses;
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
    protected $_name = [
        'baselineStatuses' => 'BaselineStatuses',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->baselineStatuses)) {
            Model::validateArray($this->baselineStatuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineStatuses) {
            if (\is_array($this->baselineStatuses)) {
                $res['BaselineStatuses'] = [];
                $n1                      = 0;
                foreach ($this->baselineStatuses as $item1) {
                    $res['BaselineStatuses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['BaselineStatuses'])) {
            if (!empty($map['BaselineStatuses'])) {
                $model->baselineStatuses = [];
                $n1                      = 0;
                foreach ($map['BaselineStatuses'] as $item1) {
                    $model->baselineStatuses[$n1++] = baselineStatuses::fromMap($item1);
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
