<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListConnectorsRequest extends Model
{
    /**
     * @var string[]
     */
    public $connectorIds;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $switchStatus;
    protected $_name = [
        'connectorIds' => 'ConnectorIds',
        'currentPage'  => 'CurrentPage',
        'name'         => 'Name',
        'pageSize'     => 'PageSize',
        'status'       => 'Status',
        'switchStatus' => 'SwitchStatus',
    ];

    public function validate()
    {
        if (\is_array($this->connectorIds)) {
            Model::validateArray($this->connectorIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectorIds) {
            if (\is_array($this->connectorIds)) {
                $res['ConnectorIds'] = [];
                $n1                  = 0;
                foreach ($this->connectorIds as $item1) {
                    $res['ConnectorIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->switchStatus) {
            $res['SwitchStatus'] = $this->switchStatus;
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
        if (isset($map['ConnectorIds'])) {
            if (!empty($map['ConnectorIds'])) {
                $model->connectorIds = [];
                $n1                  = 0;
                foreach ($map['ConnectorIds'] as $item1) {
                    $model->connectorIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SwitchStatus'])) {
            $model->switchStatus = $map['SwitchStatus'];
        }

        return $model;
    }
}
