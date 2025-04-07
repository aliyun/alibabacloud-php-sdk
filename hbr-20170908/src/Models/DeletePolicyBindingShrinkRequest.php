<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DeletePolicyBindingShrinkRequest extends Model
{
    /**
     * @description The IDs of the data sources that you want to disassociate from the backup policy.
     *
     * @var string
     */
    public $dataSourceIdsShrink;

    /**
     * @description The ID of the backup policy.
     *
     * This parameter is required.
     *
     * @example po-000************hgp
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **UDM_ECS**: ECS instance backup
     *
     * @example UDM_ECS
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'dataSourceIdsShrink' => 'DataSourceIds',
        'policyId' => 'PolicyId',
        'sourceType' => 'SourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceIdsShrink) {
            $res['DataSourceIds'] = $this->dataSourceIdsShrink;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePolicyBindingShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceIds'])) {
            $model->dataSourceIdsShrink = $map['DataSourceIds'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
