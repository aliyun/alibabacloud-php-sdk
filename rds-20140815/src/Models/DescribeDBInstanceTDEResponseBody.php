<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceTDEResponseBody\databases;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceTDEResponseBody extends Model
{
    /**
     * @var string
     */
    public $TDEStatus;

    /**
     * @var databases
     */
    public $databases;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'TDEStatus' => 'TDEStatus',
        'databases' => 'Databases',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }
        if (null !== $this->databases) {
            $res['Databases'] = null !== $this->databases ? $this->databases->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }
        if (isset($map['Databases'])) {
            $model->databases = databases::fromMap($map['Databases']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
