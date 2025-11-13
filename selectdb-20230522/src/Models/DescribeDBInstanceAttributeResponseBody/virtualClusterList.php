<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class virtualClusterList extends Model
{
    /**
     * @var string
     */
    public $activeClusterId;

    /**
     * @var string
     */
    public $activeClusterName;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $dbClusterId;

    /**
     * @var string
     */
    public $dbClusterName;

    /**
     * @var string
     */
    public $standbyClusterId;

    /**
     * @var string
     */
    public $standbyClusterName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'activeClusterId' => 'ActiveClusterId',
        'activeClusterName' => 'ActiveClusterName',
        'createdTime' => 'CreatedTime',
        'dbClusterId' => 'DbClusterId',
        'dbClusterName' => 'DbClusterName',
        'standbyClusterId' => 'StandbyClusterId',
        'standbyClusterName' => 'StandbyClusterName',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeClusterId) {
            $res['ActiveClusterId'] = $this->activeClusterId;
        }

        if (null !== $this->activeClusterName) {
            $res['ActiveClusterName'] = $this->activeClusterName;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->dbClusterId) {
            $res['DbClusterId'] = $this->dbClusterId;
        }

        if (null !== $this->dbClusterName) {
            $res['DbClusterName'] = $this->dbClusterName;
        }

        if (null !== $this->standbyClusterId) {
            $res['StandbyClusterId'] = $this->standbyClusterId;
        }

        if (null !== $this->standbyClusterName) {
            $res['StandbyClusterName'] = $this->standbyClusterName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ActiveClusterId'])) {
            $model->activeClusterId = $map['ActiveClusterId'];
        }

        if (isset($map['ActiveClusterName'])) {
            $model->activeClusterName = $map['ActiveClusterName'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['DbClusterId'])) {
            $model->dbClusterId = $map['DbClusterId'];
        }

        if (isset($map['DbClusterName'])) {
            $model->dbClusterName = $map['DbClusterName'];
        }

        if (isset($map['StandbyClusterId'])) {
            $model->standbyClusterId = $map['StandbyClusterId'];
        }

        if (isset($map['StandbyClusterName'])) {
            $model->standbyClusterName = $map['StandbyClusterName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
