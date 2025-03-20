<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateLoadBalancerRequest\adaptiveRouting;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateLoadBalancerRequest\monitor;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateLoadBalancerRequest\randomSteering;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateLoadBalancerRequest\rules;
use AlibabaCloud\Tea\Model;

class CreateLoadBalancerRequest extends Model
{
    /**
     * @description Configuration for failover across pools.
     *
     * @example true
     *
     * @var adaptiveRouting
     */
    public $adaptiveRouting;

    /**
     * @description List of default pools.
     *
     * This parameter is required.
     *
     * @example 123
     *
     * @var int[]
     */
    public $defaultPools;

    /**
     * @description Detailed description of the load balancer, for easier management and identification.
     *
     * @example 测试负载均衡器描述
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
     * This parameter is required.
     *
     * @example 123
     *
     * @var int
     */
    public $fallbackPool;

    /**
     * @description Monitor configuration, used for health checks.
     *
     * This parameter is required.
     *
     * @example order
     *
     * @var monitor
     */
    public $monitor;

    /**
     * @description The name of the load balancer, which must meet the domain name format validation and be a subdomain under the site.
     *
     * This parameter is required.
     *
     * @example lb.example.com
     *
     * @var string
     */
    public $name;

    /**
     * @description Weighted round-robin configuration, used to control the traffic distribution weights among different pools.
     *
     * @example 123
     *
     * @var randomSteering
     */
    public $randomSteering;

    /**
     * @description Address pools corresponding to primary regions.
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
     * @description Rule information.
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
     * @var rules[]
     */
    public $rules;

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
     * @example 123456789****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description Load balancing strategy.
     *
     * - geo: Geographic strategy.
     * - random: Weighted round-robin.
     * - order: Primary and backup method.
     *
     * This parameter is required.
     *
     * @example order
     *
     * @var string
     */
    public $steeringPolicy;

    /**
     * @description Address pools corresponding to secondary regions. When multiple secondary regions share a set of address pools, the keys can be concatenated with commas.
     *
     * @example {"AL,MO": [92298024898****],"CN-SH,CN-SX,CN-SC":[92304347804****,92843536908****]}
     *
     * @var mixed
     */
    public $subRegionPools;

    /**
     * @description TTL value, the time-to-live for DNS records, with a default of 30 seconds. The value range is 10-600.
     *
     * @example 300
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'adaptiveRouting' => 'AdaptiveRouting',
        'defaultPools' => 'DefaultPools',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'fallbackPool' => 'FallbackPool',
        'monitor' => 'Monitor',
        'name' => 'Name',
        'randomSteering' => 'RandomSteering',
        'regionPools' => 'RegionPools',
        'rules' => 'Rules',
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
        if (null !== $this->adaptiveRouting) {
            $res['AdaptiveRouting'] = null !== $this->adaptiveRouting ? $this->adaptiveRouting->toMap() : null;
        }
        if (null !== $this->defaultPools) {
            $res['DefaultPools'] = $this->defaultPools;
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
        if (null !== $this->monitor) {
            $res['Monitor'] = null !== $this->monitor ? $this->monitor->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->randomSteering) {
            $res['RandomSteering'] = null !== $this->randomSteering ? $this->randomSteering->toMap() : null;
        }
        if (null !== $this->regionPools) {
            $res['RegionPools'] = $this->regionPools;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreateLoadBalancerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdaptiveRouting'])) {
            $model->adaptiveRouting = adaptiveRouting::fromMap($map['AdaptiveRouting']);
        }
        if (isset($map['DefaultPools'])) {
            if (!empty($map['DefaultPools'])) {
                $model->defaultPools = $map['DefaultPools'];
            }
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
        if (isset($map['Monitor'])) {
            $model->monitor = monitor::fromMap($map['Monitor']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RandomSteering'])) {
            $model->randomSteering = randomSteering::fromMap($map['RandomSteering']);
        }
        if (isset($map['RegionPools'])) {
            $model->regionPools = $map['RegionPools'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
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
