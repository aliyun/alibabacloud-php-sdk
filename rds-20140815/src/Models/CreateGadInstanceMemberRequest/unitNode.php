<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateGadInstanceMemberRequest;

use AlibabaCloud\Tea\Model;

class unitNode extends Model
{
    /**
     * @description The name of the unit node that you want to create. The name must meet the following requirements:
     *
     *   The name must be **2 to 255** characters in length.
     *   The name can contain letters, digits, underscores (_), and hyphens (-) and must start with a letter.
     *   The name cannot start with `http://` or `https://`.
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * @example test
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The storage capacity of the unit node that you want to create. Unit: GB. You can adjust the storage capacity in increments of 5 GB. For more information, see [Primary ApsaraDB RDS instance types](https://help.aliyun.com/document_detail/26312.html). You can also call the DescribeAvailableResource operation to query the storage capacity range that is available for a specific instance type in a region.
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * @example 20
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The storage type of the new instance. Valid values:
     *
     *   **local_ssd**: local SSDs
     *   **cloud_ssd**: standard SSDs
     *   **cloud_essd**: PL1 ESSDs
     *   **cloud_essd2**: PL2 ESSDs
     *   **cloud_essd3**: PL3 ESSD
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The instance type of the unit node that you want to create. For more information, see [Primary ApsaraDB RDS instance types](https://help.aliyun.com/document_detail/26312.html). You can call the DescribeAvailableResource operation to query the available instance types in a region.
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * @example rds.mysql.t1.small
     *
     * @var string
     */
    public $dbInstanceClass;

    /**
     * @description The conflict resolution policy based on which Data Transmission Service (DTS) responds to primary key conflicts during data synchronization to the unit node that you want to create. Valid values:
     *
     *   **overwrite**: DTS overwrites the conflicting primary key on the destination node.
     *   **interrupt**: DTS stops the synchronization task, reports an error, and then exits.
     *   **ignore**: DTS overwrites the conflicting primary key on the logger node.
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * This parameter is required.
     * @example overwrite
     *
     * @var string
     */
    public $dtsConflict;

    /**
     * @description The specifications of the data synchronization task for the unit node that you want to create. Valid values:
     *
     *   **small**
     *   **medium**
     *   **large**
     *   **micro**
     *
     * >  For more information, see [Specifications of data synchronization instances](https://help.aliyun.com/document_detail/26605.html).
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * This parameter is required.
     * @example medium
     *
     * @var string
     */
    public $dtsInstanceClass;

    /**
     * @description The database engine of the unit node that you want to create. Set the value to **MySQL**.
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the unit node that you want to create. Valid values:
     *
     *   **8.0**
     *   **5.7**
     *   **5.6**
     *   **5.5**
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * @example 8.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The region ID of the unit node that you want to create. You can call the DescribeRegions operation to query the most recent region list.
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionID;

    /**
     * @description The IP address whitelist of the unit node that you want to create. For more information, see [IP address whitelist](https://help.aliyun.com/document_detail/43185.html). If you want to add more than one entry to the IP address whitelist, separate the entries with commas (,). Each entry must be unique. The IP address whitelist can contain up to 1,000 entries. The entries in the IP address whitelist must be in one of the following formats:
     *
     *   IP addresses, such as `10.10.XX.XX`.
     *   CIDR blocks, such as `10.10.XX.XX/24`. In this example, **24** indicates that the prefix of each IP address in the IP address whitelist is 24 bits in length. You can replace 24 with a value within the range of **1 to 32**.
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * @example 10.10.XX.XX
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The vSwitch ID of the unit node that you want to create.
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * This parameter is required.
     * @example vsw-bp1tg609m5j85****
     *
     * @var string
     */
    public $vSwitchID;

    /**
     * @description The virtual private cloud (VPC) ID of the unit node that you want to create.
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * This parameter is required.
     * @example vpc-bp19ame5m1r3o****
     *
     * @var string
     */
    public $vpcID;

    /**
     * @description The zone ID of the unit node that you want to create. You can call the DescribeRegions operation to query zone ID.
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneID;

    /**
     * @description The zone ID of the secondary node of the unit node that you want to create. You can call the DescribeRegions operation to query the zone ID.
     *
     *   If the value of this parameter is the same as the **zone ID** of the unit node that you want to create, the single-zone deployment method is used.
     *   If the value of this parameter is different from the **zone ID** of the unit node that you want to create, the multiple-zone deployment method is used.
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneIDSlave1;

    /**
     * @description The zone ID of the logger node of the unit node that you want to create. You can call the DescribeRegions operation to query the zone ID.
     *
     *   If the value of this parameter is the same as the **zone ID** of the unit node that you want to create, the single-zone deployment method is used.
     *   If the value of this parameter is different from the **zone ID** of the unit node that you want to create, the multiple-zone deployment method is used.
     *
     **N** specifies unit node N. The value of N is an integer that ranges from **1 to 10**. You can create up to 10 unit nodes in a global active database cluster.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneIDSlave2;
    protected $_name = [
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'dbInstanceClass'       => 'DbInstanceClass',
        'dtsConflict'           => 'DtsConflict',
        'dtsInstanceClass'      => 'DtsInstanceClass',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'regionID'              => 'RegionID',
        'securityIPList'        => 'SecurityIPList',
        'vSwitchID'             => 'VSwitchID',
        'vpcID'                 => 'VpcID',
        'zoneID'                => 'ZoneID',
        'zoneIDSlave1'          => 'ZoneIDSlave1',
        'zoneIDSlave2'          => 'ZoneIDSlave2',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->dbInstanceClass) {
            $res['DbInstanceClass'] = $this->dbInstanceClass;
        }
        if (null !== $this->dtsConflict) {
            $res['DtsConflict'] = $this->dtsConflict;
        }
        if (null !== $this->dtsInstanceClass) {
            $res['DtsInstanceClass'] = $this->dtsInstanceClass;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->regionID) {
            $res['RegionID'] = $this->regionID;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->vSwitchID) {
            $res['VSwitchID'] = $this->vSwitchID;
        }
        if (null !== $this->vpcID) {
            $res['VpcID'] = $this->vpcID;
        }
        if (null !== $this->zoneID) {
            $res['ZoneID'] = $this->zoneID;
        }
        if (null !== $this->zoneIDSlave1) {
            $res['ZoneIDSlave1'] = $this->zoneIDSlave1;
        }
        if (null !== $this->zoneIDSlave2) {
            $res['ZoneIDSlave2'] = $this->zoneIDSlave2;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unitNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DbInstanceClass'])) {
            $model->dbInstanceClass = $map['DbInstanceClass'];
        }
        if (isset($map['DtsConflict'])) {
            $model->dtsConflict = $map['DtsConflict'];
        }
        if (isset($map['DtsInstanceClass'])) {
            $model->dtsInstanceClass = $map['DtsInstanceClass'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['RegionID'])) {
            $model->regionID = $map['RegionID'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['VSwitchID'])) {
            $model->vSwitchID = $map['VSwitchID'];
        }
        if (isset($map['VpcID'])) {
            $model->vpcID = $map['VpcID'];
        }
        if (isset($map['ZoneID'])) {
            $model->zoneID = $map['ZoneID'];
        }
        if (isset($map['ZoneIDSlave1'])) {
            $model->zoneIDSlave1 = $map['ZoneIDSlave1'];
        }
        if (isset($map['ZoneIDSlave2'])) {
            $model->zoneIDSlave2 = $map['ZoneIDSlave2'];
        }

        return $model;
    }
}
