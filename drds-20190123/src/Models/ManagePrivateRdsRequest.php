<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ManagePrivateRdsRequest extends Model
{
    /**
     * @description The ID of the custom ApsaraDB RDS instance at the storage layer.
     *
     * This parameter is required.
     * @example rm-***************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * This parameter is required.
     * @example drds*************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The JSON string that consists of request parameters and the values of the request parameters of an operation that you need to call for the custom ApsaraDB RDS instance. The value of a request parameter is of the STRING type. Example: `{NodeId:"1797****"}`.
     *
     * For more information about the request parameters and valid values of the request parameters of each operation, see the request parameter sections in the following topics:
     *
     *   [DescribeDBInstanceAttribute](https://help.aliyun.com/document_detail/26231.html)
     *   [DescribeAvailableClasses](https://help.aliyun.com/document_detail/196546.html)
     *   [DescribeSQLCollectorPolicy](https://help.aliyun.com/document_detail/26292.html)
     *   [ModifySQLCollectorPolicy](https://help.aliyun.com/document_detail/26293.html)
     *   [DescribeParameters](https://help.aliyun.com/document_detail/26285.html)
     *   [ModifyParameter](https://help.aliyun.com/document_detail/26286.html)
     *   [DescribeDBInstanceHAConfig](https://help.aliyun.com/document_detail/26244.html)
     *   [SwitchDBInstanceHA](https://help.aliyun.com/document_detail/26251.html)
     *
     * > Among the required request parameters of the preceding operations, you do not need to specify the `Action` and `DBInstanceId` parameters. You must specify all the other required request parameters.
     * @example {NodeId:"1797****"}
     *
     * @var string
     */
    public $params;

    /**
     * @description The operation that you want to perform on the custom ApsaraDB RDS instance. Valid values:
     *
     *   **DescribeDBInstanceAttribute**: queries the details of the custom ApsaraDB RDS instance.
     *   **DescribeAvailableClasses**: queries the specifications that are supported for a custom ApsaraDB RDS instance. The specifications include the instance type and the storage capacity.
     *   **DescribeSQLCollectorPolicy**: queries whether the SQL Explorer (SQL Audit) feature is enabled for custom ApsaraDB RDS instance.
     *   **ModifySQLCollectorPolicy**: enables or disables the SQL Explorer (SQL Audit) feature for the custom ApsaraDB RDS instance.
     *   **DescribeParameters**: queries the parameter settings of the custom ApsaraDB RDS instance.
     *   **ModifyParameter**: modifies the parameters of the custom ApsaraDB RDS instance.
     *   **DescribeDBInstanceHAConfig**: queries the high availability mode and data replication mode of the custom ApsaraDB RDS instance.
     *   **SwitchDBInstanceHA**: switches workloads between the primary and secondary custom ApsaraDB RDS instances.
     *
     * This parameter is required.
     * @example SwitchDBInstanceHA
     *
     * @var string
     */
    public $rdsAction;

    /**
     * @description The ID of the region in which the PolarDB-X 1.0 instance resides.
     *
     * > You can call the [DescribeDrdsInstances](https://help.aliyun.com/document_detail/139284.html) operation to query the details of all PolarDB-X 1.0 instances within an Alibaba Cloud account, including the IDs of regions in which the instances reside.
     * @example cn-hanzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId'   => 'DBInstanceId',
        'drdsInstanceId' => 'DrdsInstanceId',
        'params'         => 'Params',
        'rdsAction'      => 'RdsAction',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->rdsAction) {
            $res['RdsAction'] = $this->rdsAction;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManagePrivateRdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['RdsAction'])) {
            $model->rdsAction = $map['RdsAction'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
