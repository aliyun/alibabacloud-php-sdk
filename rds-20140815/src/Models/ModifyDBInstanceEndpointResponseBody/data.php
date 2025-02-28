<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceEndpointResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $DBInstanceEndpointId;
    /**
     * @var string
     */
    public $DBInstanceName;
    protected $_name = [
        'DBInstanceEndpointId' => 'DBInstanceEndpointId',
        'DBInstanceName'       => 'DBInstanceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceEndpointId) {
            $res['DBInstanceEndpointId'] = $this->DBInstanceEndpointId;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceEndpointId'])) {
            $model->DBInstanceEndpointId = $map['DBInstanceEndpointId'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        return $model;
    }
}
