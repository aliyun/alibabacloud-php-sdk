<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class AddBuDBInstanceRelationResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $businessUnit;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'requestId'      => 'RequestId',
        'businessUnit'   => 'BusinessUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->businessUnit) {
            $res['BusinessUnit'] = $this->businessUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddBuDBInstanceRelationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BusinessUnit'])) {
            $model->businessUnit = $map['BusinessUnit'];
        }

        return $model;
    }
}
