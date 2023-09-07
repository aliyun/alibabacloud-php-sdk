<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class EvaluateRegionResourceResponseBody extends Model
{
    /**
     * @description Indicates whether sufficient resources are available. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $DBInstanceAvailable;

    /**
     * @description The type of the database engine. Valid values:
     *
     *   **MySQL**
     *   **PostgreSQL**
     *   **Oracle**
     *
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The version of the database engine
     *
     *   Valid values for the MySQL database engine:
     *
     *   **5.6**
     *   **5.7**
     *   **8.0**
     *
     *   Valid values for the PostgreSQL database engine:
     *
     *   **11**
     *   **14**
     *
     *   Valid value for the Oracle database engine: **11**
     *
     * @example 8.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The ID of the request.
     *
     * @example 69A85BAF-1089-4CDF-A82F-0A140F******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceAvailable' => 'DBInstanceAvailable',
        'DBType'              => 'DBType',
        'DBVersion'           => 'DBVersion',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceAvailable) {
            $res['DBInstanceAvailable'] = $this->DBInstanceAvailable;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluateRegionResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceAvailable'])) {
            $model->DBInstanceAvailable = $map['DBInstanceAvailable'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
