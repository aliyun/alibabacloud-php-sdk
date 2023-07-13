<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertingMetricRuleResourcesRequest extends Model
{
    /**
     * @description The namespace of the cloud service.
     *
     * For more information about the namespaces of cloud services, see [Appendix 1: Metrics](~~163515~~).
     * @example {\"userId\":\"120886317861****\",\"region\":\"cn-huhehaote\",\"queue\":\"test-0128\"}
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example 7671****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The resources that are monitored.
     *
     * @example acs_mns_new
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The timestamp when the last alert was triggered for the resource based on the alert rule.
     *
     * Unit: milliseconds.
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeAlertingMetricRuleResources**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The operator that is used to compare the metric value with the threshold. Valid values:
     *
     *   `>=`
     *   `=`
     *   `<=`
     *   `>`
     *   `<`
     *   `!=`
     *
     * @example putNewAlarm_user_7e78d765-0e3e-4671-ba6d-7ce39108****
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'dimensions' => 'Dimensions',
        'groupId'    => 'GroupId',
        'namespace'  => 'Namespace',
        'page'       => 'Page',
        'pageSize'   => 'PageSize',
        'regionId'   => 'RegionId',
        'ruleId'     => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertingMetricRuleResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
