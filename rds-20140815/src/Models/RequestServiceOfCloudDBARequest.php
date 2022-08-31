<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RequestServiceOfCloudDBARequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $serviceRequestParam;

    /**
     * @var string
     */
    public $serviceRequestType;
    protected $_name = [
        'DBInstanceId'        => 'DBInstanceId',
        'serviceRequestParam' => 'ServiceRequestParam',
        'serviceRequestType'  => 'ServiceRequestType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->serviceRequestParam) {
            $res['ServiceRequestParam'] = $this->serviceRequestParam;
        }
        if (null !== $this->serviceRequestType) {
            $res['ServiceRequestType'] = $this->serviceRequestType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RequestServiceOfCloudDBARequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ServiceRequestParam'])) {
            $model->serviceRequestParam = $map['ServiceRequestParam'];
        }
        if (isset($map['ServiceRequestType'])) {
            $model->serviceRequestType = $map['ServiceRequestType'];
        }

        return $model;
    }
}
