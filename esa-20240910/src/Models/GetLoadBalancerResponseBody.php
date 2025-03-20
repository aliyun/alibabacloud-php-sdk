<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerResponseBody\adaptiveRouting;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerResponseBody\monitor;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerResponseBody\randomSteering;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerResponseBody\rules;
use AlibabaCloud\Tea\Model;

class GetLoadBalancerResponseBody extends Model
{
    /**
     * @description Cross-pool failover configuration.
     *
     * @var adaptiveRouting
     */
    public $adaptiveRouting;

    /**
     * @description List of default pool IDs.
     *
     * @var int[]
     */
    public $defaultPools;

    /**
     * @description Description of the load balancer.
     *
     * @example test
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
     * @description The fallback pool ID, to which traffic will be redirected if all other pools are unavailable.
     *
     * @example 96228666776****
     *
     * @var int
     */
    public $fallbackPool;

    /**
     * @description The unique identifier ID of the load balancer.
     *
     * @example 99867648760****
     *
     * @var int
     */
    public $id;

    /**
     * @description Monitor configuration.
     *
     * @var monitor
     */
    public $monitor;

    /**
     * @description The name of the load balancer.
     *
     * @example lb.example.com
     *
     * @var string
     */
    public $name;

    /**
     * @description Weighted round-robin configuration, used to control the traffic distribution weights among different pools.
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
     * @description Request ID.
     *
     * @example EEEBE525-F576-1196-8DAF-2D70CA3F4D2F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description A list of rule configurations, used to define behavior under specific conditions.
     *
     * @var rules[]
     */
    public $rules;

    /**
     * @description Session persistence, with values:
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
     * @description The site ID to which the load balancer belongs.
     *
     * @example 11591017874****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The status of the load balancer.
     *
     * @example healthy
     *
     * @var string
     */
    public $status;

    /**
     * @description Load balancing policy.
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
     * @description TTL value, the time-to-live for DNS records, with a default of 30 seconds.
     *
     * @example 60
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
        'id' => 'Id',
        'monitor' => 'Monitor',
        'name' => 'Name',
        'randomSteering' => 'RandomSteering',
        'regionPools' => 'RegionPools',
        'requestId' => 'RequestId',
        'rules' => 'Rules',
        'sessionAffinity' => 'SessionAffinity',
        'siteId' => 'SiteId',
        'status' => 'Status',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return GetLoadBalancerResponseBody
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
