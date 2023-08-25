<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterAccessWhiteListRequest extends Model
{
    /**
     * @description The attribute of the IP address whitelist. By default, this parameter is empty.
     *
     * > Whitelists with the hidden attribute are not displayed in the console. Those whitelists are used to access Data Transmission Service (DTS) and PolarDB.
     * @example hidden
     *
     * @var string
     */
    public $DBClusterIPArrayAttribute;

    /**
     * @description The name of the IP address whitelist. If you do not specify this parameter, the Default whitelist is modified.
     *
     *   The whitelist name must be 2 to 32 characters in length. The name can contain lowercase letters, digits, and underscores (\_). The name must start with a lowercase letter and end with a lowercase letter or a digit.
     *   Each cluster supports up to 50 IP address whitelists.
     *
     * @example test
     *
     * @var string
     */
    public $DBClusterIPArrayName;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-bp11q28kvl688****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The method used to modify the IP address whitelist. Valid values:
     *
     *   **Cover** (default)
     *   **Append**
     *   **Delete**
     *
     * @example Cover
     *
     * @var string
     */
    public $modifyMode;

    /**
     * @description The IP addresses in an IP address whitelist of a cluster. Separate multiple IP addresses with commas (,). You can add a maximum of 500 different IP addresses to a whitelist. The entries in the IP address whitelist must be in one of the following formats:
     *
     *   IP addresses, such as 10.23.XX.XX.
     *   CIDR blocks, such as 10.23.xx.xx/24. In this example, 24 indicates that the prefix of each IP address in the IP whitelist is 24 bits in length. You can replace 24 with a value within the range of 1 to 32.
     *
     * @example 10.23.xx.xx
     *
     * @var string
     */
    public $securityIps;
    protected $_name = [
        'DBClusterIPArrayAttribute' => 'DBClusterIPArrayAttribute',
        'DBClusterIPArrayName'      => 'DBClusterIPArrayName',
        'DBClusterId'               => 'DBClusterId',
        'modifyMode'                => 'ModifyMode',
        'securityIps'               => 'SecurityIps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterIPArrayAttribute) {
            $res['DBClusterIPArrayAttribute'] = $this->DBClusterIPArrayAttribute;
        }
        if (null !== $this->DBClusterIPArrayName) {
            $res['DBClusterIPArrayName'] = $this->DBClusterIPArrayName;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
        }
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterAccessWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterIPArrayAttribute'])) {
            $model->DBClusterIPArrayAttribute = $map['DBClusterIPArrayAttribute'];
        }
        if (isset($map['DBClusterIPArrayName'])) {
            $model->DBClusterIPArrayName = $map['DBClusterIPArrayName'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
        }
        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }

        return $model;
    }
}
