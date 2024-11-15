<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Tea\Model;

class RunEvaluationShrinkRequest extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the member. This parameter takes effect only when a multi-account governance maturity check is performed.
     *
     * @example 176618589410****
     *
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $metricIdsShrink;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The check range of the governance maturity check. Valid values:
     *
     *   Account (default): A single-account governance maturity check is performed to check only the Alibaba Cloud account that you use to access Cloud Governance Center.
     *   ResourceDirectory: A multi-account governance maturity check is performed to check all members within a resource directory. Before you perform a multi-account governance maturity check, you must enable the multi-account governance maturity check feature.
     *
     * @example ResourceDirectory
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'accountId'       => 'AccountId',
        'metricIdsShrink' => 'MetricIds',
        'regionId'        => 'RegionId',
        'scope'           => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->metricIdsShrink) {
            $res['MetricIds'] = $this->metricIdsShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunEvaluationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['MetricIds'])) {
            $model->metricIdsShrink = $map['MetricIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
