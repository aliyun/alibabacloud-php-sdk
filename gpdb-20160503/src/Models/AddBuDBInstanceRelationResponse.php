<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class AddBuDBInstanceRelationResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $businessUnit;

    /**
     * @var string
     */
    public $DBInstanceName;
    protected $_name = [
        'requestId'      => 'RequestId',
        'businessUnit'   => 'BusinessUnit',
        'DBInstanceName' => 'DBInstanceName',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('businessUnit', $this->businessUnit, true);
        Model::validateRequired('DBInstanceName', $this->DBInstanceName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->businessUnit) {
            $res['BusinessUnit'] = $this->businessUnit;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddBuDBInstanceRelationResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BusinessUnit'])) {
            $model->businessUnit = $map['BusinessUnit'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        return $model;
    }
}
