<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetMySQLAllSessionAsyncRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * >  Only ApsaraDB RDS for MySQL, PolarDB for MySQL, and PolarDB-X 2.0 instances are supported.
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The node ID.
     *
     * >  You must specify this parameter for PolarDB for MySQL clusters. If you do not specify a node ID, the session data of the primary node is returned by default.
     * @example pi-wz954ryd8f893****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The ID of the asynchronous request.
     *
     * >  You can leave this parameter empty when you call the operation to initiate the request for the first time, and use the value of this parameter contained in the response to the first request for subsequent requests.
     * @example async__507044db6c4eadfa2dab9b084e80****
     *
     * @var string
     */
    public $resultId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
        'resultId'   => 'ResultId',
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
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->resultId) {
            $res['ResultId'] = $this->resultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMySQLAllSessionAsyncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ResultId'])) {
            $model->resultId = $map['ResultId'];
        }

        return $model;
    }
}
