<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeSDGRequest extends Model
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
     * @var string[]
     */
    public $SDGIds;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'SDGIds' => 'SDGIds',
    ];

    public function validate()
    {
        if (\is_array($this->SDGIds)) {
            Model::validateArray($this->SDGIds);
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

        if (null !== $this->SDGIds) {
            if (\is_array($this->SDGIds)) {
                $res['SDGIds'] = [];
                $n1 = 0;
                foreach ($this->SDGIds as $item1) {
                    $res['SDGIds'][$n1] = $item1;
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

        if (isset($map['SDGIds'])) {
            if (!empty($map['SDGIds'])) {
                $model->SDGIds = [];
                $n1 = 0;
                foreach ($map['SDGIds'] as $item1) {
                    $model->SDGIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
