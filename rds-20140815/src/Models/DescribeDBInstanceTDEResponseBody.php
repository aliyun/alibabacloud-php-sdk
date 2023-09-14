<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceTDEResponseBody\databases;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceTDEResponseBody extends Model
{
    /**
     * @description The TDE status at the database level.
     *
     * >  If your instance runs SQL Server 2019 SE or SQL Server EE, you can specify whether to enable TDE at the database level when you enable TDE at the instance level.
     * @var databases
     */
    public $databases;

    /**
     * @description The ID of the request.
     *
     * @example C816A4BF-A6EC-4722-95F9-2055859CCFD2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The key method for instance level TDE encryption, with values:
     * - **Aliyun_Generate_Key**
     * - **Customer_Provided_Key**
     * - **Unknown**
     * @example Aliyun_Generate_Key
     *
     * @var string
     */
    public $TDEMode;

    /**
     * @description The TDE status of the instance. Valid values:
     *
     *   **Enabled**
     *   **Disabled**
     *
     * @example Enabled
     *
     * @var string
     */
    public $TDEStatus;
    protected $_name = [
        'databases' => 'Databases',
        'requestId' => 'RequestId',
        'TDEMode'   => 'TDEMode',
        'TDEStatus' => 'TDEStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databases) {
            $res['Databases'] = null !== $this->databases ? $this->databases->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->TDEMode) {
            $res['TDEMode'] = $this->TDEMode;
        }
        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceTDEResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Databases'])) {
            $model->databases = databases::fromMap($map['Databases']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TDEMode'])) {
            $model->TDEMode = $map['TDEMode'];
        }
        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }

        return $model;
    }
}
