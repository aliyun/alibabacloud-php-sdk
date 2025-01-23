<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListConnectionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListConnectionsResponseBody\data\connections;

class data extends Model
{
    /**
     * @var connections[]
     */
    public $connections;
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
        'connections' => 'Connections',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->connections)) {
            Model::validateArray($this->connections);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connections) {
            if (\is_array($this->connections)) {
                $res['Connections'] = [];
                $n1                 = 0;
                foreach ($this->connections as $item1) {
                    $res['Connections'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Connections'])) {
            if (!empty($map['Connections'])) {
                $model->connections = [];
                $n1                 = 0;
                foreach ($map['Connections'] as $item1) {
                    $model->connections[$n1++] = connections::fromMap($item1);
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
