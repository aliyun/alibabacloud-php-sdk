<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateLoadBalancerShrinkRequest extends Model
{
    /**
     * @description Configuration for failover across pools.
     *
     * @var string
     */
    public $adaptiveRoutingShrink;

    /**
     * @description List of default pool IDs.
     *
     * @var string
     */
    public $defaultPoolsShrink;

    /**
     * @description Detailed description of the load balancer, for easier management and identification.
     *
     * @example 负载均衡器描述
     *
     * @var string
     */
    public $description;

    /**
     * @description Whether the load balancer is enabled.
     *
     * - true: Enabled.
     * - false: Not enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description Fallback pool ID, where traffic will be directed when all other pools are unavailable.
     *
     * @example 96228666776****
     *
     * @var int
     */
    public $fallbackPool;

    /**
     * @description Load balancer ID, which can be obtained by calling the [ListLoadBalancers](https://help.aliyun.com/document_detail/2868897.html) API.
     *
     * This parameter is required.
     *
     * @example 95913670174****
     *
     * @var int
     */
    public $id;

    /**
     * @description Monitor configuration for health checks.
     *
     * @var string
     */
    public $monitorShrink;

    /**
     * @description Weighted round-robin configuration, used to control the traffic distribution weights among different pools.
     *
     * @var string
     */
    public $randomSteeringShrink;

    /**
     * @description Address pool corresponding to the primary region.
     *
     * @example {
     * "ENAM": [
     * 12345678****
     * ],
     * "WNAM": [
     * 23456789****,
     * 23456789****
     * ]
     * }
     *
     * @var mixed
     */
    public $regionPools;

    /**
     * @description Rule configuration list, used to define behavior overrides under specific conditions.
     *
     * @var string
     */
    public $rulesShrink;

    /**
     * @description Session persistence, with possible values:
     * - off: Not enabled.
     * - ip: Session persistence by IP.
     * - cookie: Session persistence by cookie.
     *
     * @example ip
     *
     * @var string
     */
    public $sessionAffinity;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](~~ListSites~~) interface.
     *
     * This parameter is required.
     *
     * @example 1159101787****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description Load balancing policy.
     *
     * @example order
     *
     * @var string
     */
    public $steeringPolicy;

    /**
     * @description Address pool corresponding to the secondary region. When multiple secondary regions share the same address pool, the keys can be concatenated with commas.
     *
     * @example {"AL,MO": [92298024898****],"CN-SH,CN-SX,CN-SC":[92304347804****,92843536908****]}
     *
     * @var mixed
     */
    public $subRegionPools;

    /**
     * @description TTL value, the time-to-live for DNS records, with a default of 30 and a range of 10-600.
     *
     * @example 300
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'adaptiveRoutingShrink' => 'AdaptiveRouting',
        'defaultPoolsShrink' => 'DefaultPools',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'fallbackPool' => 'FallbackPool',
        'id' => 'Id',
        'monitorShrink' => 'Monitor',
        'randomSteeringShrink' => 'RandomSteering',
        'regionPools' => 'RegionPools',
        'rulesShrink' => 'Rules',
        'sessionAffinity' => 'SessionAffinity',
        'siteId' => 'SiteId',
        'steeringPolicy' => 'SteeringPolicy',
        'subRegionPools' => 'SubRegionPools',
        'ttl' => 'Ttl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adaptiveRoutingShrink) {
            $res['AdaptiveRouting'] = $this->adaptiveRoutingShrink;
        }
        if (null !== $this->defaultPoolsShrink) {
            $res['DefaultPools'] = $this->defaultPoolsShrink;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->fallbackPool) {
            $res['FallbackPool'] = $this->fallbackPool;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->monitorShrink) {
            $res['Monitor'] = $this->monitorShrink;
        }
        if (null !== $this->randomSteeringShrink) {
            $res['RandomSteering'] = $this->randomSteeringShrink;
        }
        if (null !== $this->regionPools) {
            $res['RegionPools'] = $this->regionPools;
        }
        if (null !== $this->rulesShrink) {
            $res['Rules'] = $this->rulesShrink;
        }
        if (null !== $this->sessionAffinity) {
            $res['SessionAffinity'] = $this->sessionAffinity;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->steeringPolicy) {
            $res['SteeringPolicy'] = $this->steeringPolicy;
        }
        if (null !== $this->subRegionPools) {
            $res['SubRegionPools'] = $this->subRegionPools;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLoadBalancerShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdaptiveRouting'])) {
            $model->adaptiveRoutingShrink = $map['AdaptiveRouting'];
        }
        if (isset($map['DefaultPools'])) {
            $model->defaultPoolsShrink = $map['DefaultPools'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['FallbackPool'])) {
            $model->fallbackPool = $map['FallbackPool'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Monitor'])) {
            $model->monitorShrink = $map['Monitor'];
        }
        if (isset($map['RandomSteering'])) {
            $model->randomSteeringShrink = $map['RandomSteering'];
        }
        if (isset($map['RegionPools'])) {
            $model->regionPools = $map['RegionPools'];
        }
        if (isset($map['Rules'])) {
            $model->rulesShrink = $map['Rules'];
        }
        if (isset($map['SessionAffinity'])) {
            $model->sessionAffinity = $map['SessionAffinity'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SteeringPolicy'])) {
            $model->steeringPolicy = $map['SteeringPolicy'];
        }
        if (isset($map['SubRegionPools'])) {
            $model->subRegionPools = $map['SubRegionPools'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
