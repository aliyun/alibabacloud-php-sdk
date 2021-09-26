<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterOperationHostResponseBody\clusterOperationHostList;

use AlibabaCloud\Tea\Model;

class clusterOperationHost extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $percentage;

    /**
     * @var string
     */
    public $hostId;
    protected $_name = [
        'status'     => 'Status',
        'hostName'   => 'HostName',
        'percentage' => 'Percentage',
        'hostId'     => 'HostId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterOperationHost
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        return $model;
    }
}
