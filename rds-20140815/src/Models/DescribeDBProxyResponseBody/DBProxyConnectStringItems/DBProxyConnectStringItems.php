<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\DBProxyConnectStringItems;

use AlibabaCloud\Dara\Model;

class DBProxyConnectStringItems extends Model
{
    /**
     * @var string
     */
    public $DBProxyConnectString;
    /**
     * @var string
     */
    public $DBProxyConnectStringNetType;
    /**
     * @var string
     */
    public $DBProxyConnectStringNetWorkType;
    /**
     * @var string
     */
    public $DBProxyConnectStringPort;
    /**
     * @var string
     */
    public $DBProxyEndpointId;
    /**
     * @var string
     */
    public $DBProxyEndpointName;
    /**
     * @var string
     */
    public $DBProxyVpcId;
    /**
     * @var string
     */
    public $DBProxyVpcInstanceId;
    /**
     * @var string
     */
    public $DBProxyVswitchId;
    protected $_name = [
        'DBProxyConnectString'            => 'DBProxyConnectString',
        'DBProxyConnectStringNetType'     => 'DBProxyConnectStringNetType',
        'DBProxyConnectStringNetWorkType' => 'DBProxyConnectStringNetWorkType',
        'DBProxyConnectStringPort'        => 'DBProxyConnectStringPort',
        'DBProxyEndpointId'               => 'DBProxyEndpointId',
        'DBProxyEndpointName'             => 'DBProxyEndpointName',
        'DBProxyVpcId'                    => 'DBProxyVpcId',
        'DBProxyVpcInstanceId'            => 'DBProxyVpcInstanceId',
        'DBProxyVswitchId'                => 'DBProxyVswitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBProxyConnectString) {
            $res['DBProxyConnectString'] = $this->DBProxyConnectString;
        }

        if (null !== $this->DBProxyConnectStringNetType) {
            $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        }

        if (null !== $this->DBProxyConnectStringNetWorkType) {
            $res['DBProxyConnectStringNetWorkType'] = $this->DBProxyConnectStringNetWorkType;
        }

        if (null !== $this->DBProxyConnectStringPort) {
            $res['DBProxyConnectStringPort'] = $this->DBProxyConnectStringPort;
        }

        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }

        if (null !== $this->DBProxyEndpointName) {
            $res['DBProxyEndpointName'] = $this->DBProxyEndpointName;
        }

        if (null !== $this->DBProxyVpcId) {
            $res['DBProxyVpcId'] = $this->DBProxyVpcId;
        }

        if (null !== $this->DBProxyVpcInstanceId) {
            $res['DBProxyVpcInstanceId'] = $this->DBProxyVpcInstanceId;
        }

        if (null !== $this->DBProxyVswitchId) {
            $res['DBProxyVswitchId'] = $this->DBProxyVswitchId;
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
        if (isset($map['DBProxyConnectString'])) {
            $model->DBProxyConnectString = $map['DBProxyConnectString'];
        }

        if (isset($map['DBProxyConnectStringNetType'])) {
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }

        if (isset($map['DBProxyConnectStringNetWorkType'])) {
            $model->DBProxyConnectStringNetWorkType = $map['DBProxyConnectStringNetWorkType'];
        }

        if (isset($map['DBProxyConnectStringPort'])) {
            $model->DBProxyConnectStringPort = $map['DBProxyConnectStringPort'];
        }

        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }

        if (isset($map['DBProxyEndpointName'])) {
            $model->DBProxyEndpointName = $map['DBProxyEndpointName'];
        }

        if (isset($map['DBProxyVpcId'])) {
            $model->DBProxyVpcId = $map['DBProxyVpcId'];
        }

        if (isset($map['DBProxyVpcInstanceId'])) {
            $model->DBProxyVpcInstanceId = $map['DBProxyVpcInstanceId'];
        }

        if (isset($map['DBProxyVswitchId'])) {
            $model->DBProxyVswitchId = $map['DBProxyVswitchId'];
        }

        return $model;
    }
}
