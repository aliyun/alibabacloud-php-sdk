<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyVectorConfigurationRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * >  You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) operation to query the IDs of all AnalyticDB for PostgreSQL instances in a region.
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Specifies whether to enable vector engine optimization. Valid values:
     *
     *   **enabled**
     *   **disabled**
     *
     * > *   We recommend that you **do not enable** vector engine optimization in mainstream analysis and real-time data warehousing scenarios.
     * > *   We recommend that you **enable** vector engine optimization in AI Generated Content (AIGC) and vector retrieval scenarios that require the vector analysis engine.
     * @example enabled
     *
     * @var string
     */
    public $vectorConfigurationStatus;
    protected $_name = [
        'DBInstanceId'              => 'DBInstanceId',
        'ownerId'                   => 'OwnerId',
        'vectorConfigurationStatus' => 'VectorConfigurationStatus',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->vectorConfigurationStatus) {
            $res['VectorConfigurationStatus'] = $this->vectorConfigurationStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVectorConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['VectorConfigurationStatus'])) {
            $model->vectorConfigurationStatus = $map['VectorConfigurationStatus'];
        }

        return $model;
    }
}
