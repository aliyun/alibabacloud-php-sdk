<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class AddBuDBInstanceRelationRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $businessUnit;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'businessUnit' => 'BusinessUnit',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('businessUnit', $this->businessUnit, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->businessUnit) {
            $res['BusinessUnit'] = $this->businessUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddBuDBInstanceRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['BusinessUnit'])) {
            $model->businessUnit = $map['BusinessUnit'];
        }

        return $model;
    }
}
