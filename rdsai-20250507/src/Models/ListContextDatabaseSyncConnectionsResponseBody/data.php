<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncConnectionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncConnectionsResponseBody\data\connections;

class data extends Model
{
    /**
     * @var connections[]
     */
    public $connections;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'connections' => 'Connections',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'total' => 'Total',
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
                $n1 = 0;
                foreach ($this->connections as $item1) {
                    $res['Connections'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
                $n1 = 0;
                foreach ($map['Connections'] as $item1) {
                    $model->connections[$n1] = connections::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
