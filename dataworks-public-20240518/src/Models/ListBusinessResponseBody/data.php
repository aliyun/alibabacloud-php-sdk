<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListBusinessResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListBusinessResponseBody\data\business;

class data extends Model
{
    /**
     * @var business[]
     */
    public $business;

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
        'business' => 'Business',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->business)) {
            Model::validateArray($this->business);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->business) {
            if (\is_array($this->business)) {
                $res['Business'] = [];
                $n1 = 0;
                foreach ($this->business as $item1) {
                    $res['Business'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Business'])) {
            if (!empty($map['Business'])) {
                $model->business = [];
                $n1 = 0;
                foreach ($map['Business'] as $item1) {
                    $model->business[$n1++] = business::fromMap($item1);
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
