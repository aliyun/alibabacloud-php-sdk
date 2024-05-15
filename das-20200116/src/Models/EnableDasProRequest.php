<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class EnableDasProRequest extends Model
{
    /**
     * @description The database instance ID.
     *
     * This parameter is required.
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The storage duration of SQL Explorer data. Unit: day. Default value: **30**. Valid values:
     *
     *   **30**
     *   **180**
     *   **365**
     *   **1095**
     *   **1825**
     *
     * @example 30
     *
     * @var int
     */
    public $sqlRetention;

    /**
     * @description The ID of the Alibaba Cloud account that is used to create the database instance.
     *
     * >  This parameter is optional. The system can automatically obtain the account ID based on the value of InstanceId when you call this operation.
     * @example 196278346919****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'sqlRetention' => 'SqlRetention',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sqlRetention) {
            $res['SqlRetention'] = $this->sqlRetention;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableDasProRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SqlRetention'])) {
            $model->sqlRetention = $map['SqlRetention'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
