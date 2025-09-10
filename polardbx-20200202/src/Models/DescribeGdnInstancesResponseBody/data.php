<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeGdnInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeGdnInstancesResponseBody\data\gdnInstanceList;

class data extends Model
{
    /**
     * @var gdnInstanceList[]
     */
    public $gdnInstanceList;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $totalNumber;
    protected $_name = [
        'gdnInstanceList' => 'GdnInstanceList',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalNumber' => 'TotalNumber',
    ];

    public function validate()
    {
        if (\is_array($this->gdnInstanceList)) {
            Model::validateArray($this->gdnInstanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gdnInstanceList) {
            if (\is_array($this->gdnInstanceList)) {
                $res['GdnInstanceList'] = [];
                $n1 = 0;
                foreach ($this->gdnInstanceList as $item1) {
                    $res['GdnInstanceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
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
        if (isset($map['GdnInstanceList'])) {
            if (!empty($map['GdnInstanceList'])) {
                $model->gdnInstanceList = [];
                $n1 = 0;
                foreach ($map['GdnInstanceList'] as $item1) {
                    $model->gdnInstanceList[$n1] = gdnInstanceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }

        return $model;
    }
}
