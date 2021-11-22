<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolsResponseBody;

use AlibabaCloud\Tea\Model;

class connectionPools extends Model
{
    /**
     * @var string[]
     */
    public $cidrs;

    /**
     * @var string
     */
    public $connectionPoolDescription;

    /**
     * @var string
     */
    public $connectionPoolId;

    /**
     * @var string
     */
    public $connectionPoolName;

    /**
     * @var string
     */
    public $connectionPoolStatus;

    /**
     * @var string
     */
    public $operateResultRequestID;
    protected $_name = [
        'cidrs'                     => 'Cidrs',
        'connectionPoolDescription' => 'ConnectionPoolDescription',
        'connectionPoolId'          => 'ConnectionPoolId',
        'connectionPoolName'        => 'ConnectionPoolName',
        'connectionPoolStatus'      => 'ConnectionPoolStatus',
        'operateResultRequestID'    => 'OperateResultRequestID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrs) {
            $res['Cidrs'] = $this->cidrs;
        }
        if (null !== $this->connectionPoolDescription) {
            $res['ConnectionPoolDescription'] = $this->connectionPoolDescription;
        }
        if (null !== $this->connectionPoolId) {
            $res['ConnectionPoolId'] = $this->connectionPoolId;
        }
        if (null !== $this->connectionPoolName) {
            $res['ConnectionPoolName'] = $this->connectionPoolName;
        }
        if (null !== $this->connectionPoolStatus) {
            $res['ConnectionPoolStatus'] = $this->connectionPoolStatus;
        }
        if (null !== $this->operateResultRequestID) {
            $res['OperateResultRequestID'] = $this->operateResultRequestID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectionPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidrs'])) {
            if (!empty($map['Cidrs'])) {
                $model->cidrs = $map['Cidrs'];
            }
        }
        if (isset($map['ConnectionPoolDescription'])) {
            $model->connectionPoolDescription = $map['ConnectionPoolDescription'];
        }
        if (isset($map['ConnectionPoolId'])) {
            $model->connectionPoolId = $map['ConnectionPoolId'];
        }
        if (isset($map['ConnectionPoolName'])) {
            $model->connectionPoolName = $map['ConnectionPoolName'];
        }
        if (isset($map['ConnectionPoolStatus'])) {
            $model->connectionPoolStatus = $map['ConnectionPoolStatus'];
        }
        if (isset($map['OperateResultRequestID'])) {
            $model->operateResultRequestID = $map['OperateResultRequestID'];
        }

        return $model;
    }
}
