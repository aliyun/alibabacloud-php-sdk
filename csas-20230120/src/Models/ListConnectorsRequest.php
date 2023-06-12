<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListConnectorsRequest extends Model
{
    /**
     * @var string[]
     */
    public $connectorIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example connector_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 10
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectorIds) {
            $res['ConnectorIds'] = $this->connectorIds;
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

    /**
     * @param array $map
     *
     * @return ListConnectorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectorIds'])) {
            if (!empty($map['ConnectorIds'])) {
                $model->connectorIds = $map['ConnectorIds'];
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
