<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlansRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The name of the filter condition. Valid values:
     *
     *   ProvisionedProductPlanName: performs exact matches by plan name. Plan names are not case-sensitive.
     *   ProvisionedProductPlanApprover: performs exact matches by reviewer. You must specify a reviewer in the `RamUser/RamRole:<Name of the reviewer>` format. You can specify multiple reviewers.
     *   ProvisionedProductPlanApproverName: performs matches by reviewer name. You must specify the Resource Access Management (RAM) entity name of the reviewer. You can specify multiple reviewer names.
     *   ProvisionedProductPlanStatus: performs matches by plan status. You must specify the state of the plan. You can specify multiple states.
     *   ProvisionedProductPlanOwnerUid: performs exact matches by ID of Alibaba Cloud account to which a plan belongs.
     *   FullTextSearch: performs fuzzy full-text searches by plan name.
     *
     * @example FullTextSearch
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the filter condition.
     *
     * @example ECS
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
