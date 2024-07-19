<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceProvisionsResponseBody\serviceProvisions\roleProvision\roles;

use AlibabaCloud\Tea\Model;

class apiForCreation extends Model
{
    /**
     * @description The name of the API operation.
     *
     * @example CreateServiceLinkedRole
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The ID of the Alibaba Cloud service to which the API operation belongs.
     *
     * @example rds
     *
     * @var string
     */
    public $apiProductId;

    /**
     * @description The type of the API operation. Valid values:
     *
     *   Open: public
     *   Inner: private
     *
     * @example Open
     *
     * @var string
     */
    public $apiType;

    /**
     * @description The ROS parameters of the cluster.
     *
     * @example { "ServiceLinkedRole": "AliyunServiceRoleForRdsPgsqlOnEcs", "RegionId": "${RegionId}" }
     *
     * @var mixed[]
     */
    public $parameters;
    protected $_name = [
        'apiName'      => 'ApiName',
        'apiProductId' => 'ApiProductId',
        'apiType'      => 'ApiType',
        'parameters'   => 'parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->apiProductId) {
            $res['ApiProductId'] = $this->apiProductId;
        }
        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiForCreation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ApiProductId'])) {
            $model->apiProductId = $map['ApiProductId'];
        }
        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }

        return $model;
    }
}
