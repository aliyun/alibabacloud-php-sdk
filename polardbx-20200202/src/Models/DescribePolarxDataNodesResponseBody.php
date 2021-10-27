<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePolarxDataNodesResponseBody\DBInstanceDataNodes;
use AlibabaCloud\Tea\Model;

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
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'totalNumber'         => 'TotalNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceDataNodes) {
            $res['DBInstanceDataNodes'] = [];
            if (null !== $this->DBInstanceDataNodes && \is_array($this->DBInstanceDataNodes)) {
                $n = 0;
                foreach ($this->DBInstanceDataNodes as $item) {
                    $res['DBInstanceDataNodes'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribePolarxDataNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceDataNodes'])) {
            if (!empty($map['DBInstanceDataNodes'])) {
                $model->DBInstanceDataNodes = [];
                $n                          = 0;
                foreach ($map['DBInstanceDataNodes'] as $item) {
                    $model->DBInstanceDataNodes[$n++] = null !== $item ? DBInstanceDataNodes::fromMap($item) : $item;
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
