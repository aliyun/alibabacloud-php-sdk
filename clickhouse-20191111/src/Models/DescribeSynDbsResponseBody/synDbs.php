<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSynDbsResponseBody;

use AlibabaCloud\Tea\Model;

class synDbs extends Model
{
    /**
     * @description *   When the value **true** is returned for the **SynStatus** parameter, the system does not return the ErrorMsg parameter.
     *   When the value **false** is returned for the **SynStatus** parameter, the system returns for the ErrorMsg parameter the cause why the data synchronization failed.
     *
     * @example ClickHouse exception, code: 49, host: 100.100.118.132, port: 49670; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The ID of the ApsaraDB RDS for MySQL instance.
     *
     * @example rm-wz9d11qg1j0h4****
     *
     * @var string
     */
    public $rdsId;

    /**
     * @description The database account that is used to log on to the ApsaraDB RDS for MySQL instance.
     *
     * @example test
     *
     * @var string
     */
    public $rdsUserName;

    /**
     * @description The internal endpoint of the ApsaraDB RDS for MySQL instance.
     *
     * @example rm-bp16t9h3999xb0a711****.mysql.rds.aliyuncs.com:3306
     *
     * @var string
     */
    public $rdsVpcUrl;

    /**
     * @description The name of the database in the ApsaraDB RDS for MySQL instance.
     *
     * @example database
     *
     * @var string
     */
    public $synDb;

    /**
     * @description Indicates whether the data synchronization succeeded. Valid values:
     *
     *   **true**: The data synchronization succeeded.
     *   **false**: The data synchronization failed.
     *
     * @example true
     *
     * @var bool
     */
    public $synStatus;
    protected $_name = [
        'errorMsg'    => 'ErrorMsg',
        'rdsId'       => 'RdsId',
        'rdsUserName' => 'RdsUserName',
        'rdsVpcUrl'   => 'RdsVpcUrl',
        'synDb'       => 'SynDb',
        'synStatus'   => 'SynStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->rdsId) {
            $res['RdsId'] = $this->rdsId;
        }
        if (null !== $this->rdsUserName) {
            $res['RdsUserName'] = $this->rdsUserName;
        }
        if (null !== $this->rdsVpcUrl) {
            $res['RdsVpcUrl'] = $this->rdsVpcUrl;
        }
        if (null !== $this->synDb) {
            $res['SynDb'] = $this->synDb;
        }
        if (null !== $this->synStatus) {
            $res['SynStatus'] = $this->synStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return synDbs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['RdsId'])) {
            $model->rdsId = $map['RdsId'];
        }
        if (isset($map['RdsUserName'])) {
            $model->rdsUserName = $map['RdsUserName'];
        }
        if (isset($map['RdsVpcUrl'])) {
            $model->rdsVpcUrl = $map['RdsVpcUrl'];
        }
        if (isset($map['SynDb'])) {
            $model->synDb = $map['SynDb'];
        }
        if (isset($map['SynStatus'])) {
            $model->synStatus = $map['SynStatus'];
        }

        return $model;
    }
}
