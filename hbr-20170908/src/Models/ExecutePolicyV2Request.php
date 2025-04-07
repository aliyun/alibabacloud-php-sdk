<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class ExecutePolicyV2Request extends Model
{
    /**
     * @description Data source ID.
     *
     * @example i-bp1************dtv
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description Policy ID.
     *
     * This parameter is required.
     *
     * @example po-000************hky
     *
     * @var string
     */
    public $policyId;

    /**
     * @description Rule ID, limited to executing rules of **RuleType** **BACKUP**.
     *
     * This parameter is required.
     *
     * @example rule-0002*****ux8
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description Data source type, with the value range as follows:
     *
     * - **UDM_ECS**: Represents ECS full machine backup.
     *
     * @example UDM_ECS
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'policyId' => 'PolicyId',
        'ruleId' => 'RuleId',
        'sourceType' => 'SourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecutePolicyV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
