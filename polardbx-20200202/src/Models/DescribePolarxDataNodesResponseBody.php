<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePolarxDataNodesResponseBody\DBInstanceDataNodes;

class DescribePolarxDataNodesResponseBody extends Model
{
    /**
     * @var DBInstanceDataNodes[]
     */
    public $DBInstanceDataNodes;

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
    public $totalNumber;
    protected $_name = [
        'DBInstanceDataNodes' => 'DBInstanceDataNodes',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalNumber' => 'TotalNumber',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceDataNodes)) {
            Model::validateArray($this->DBInstanceDataNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceDataNodes) {
            if (\is_array($this->DBInstanceDataNodes)) {
                $res['DBInstanceDataNodes'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceDataNodes as $item1) {
                    $res['DBInstanceDataNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBInstanceDataNodes'])) {
            if (!empty($map['DBInstanceDataNodes'])) {
                $model->DBInstanceDataNodes = [];
                $n1 = 0;
                foreach ($map['DBInstanceDataNodes'] as $item1) {
                    $model->DBInstanceDataNodes[$n1] = DBInstanceDataNodes::fromMap($item1);
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }

        return $model;
    }
}
