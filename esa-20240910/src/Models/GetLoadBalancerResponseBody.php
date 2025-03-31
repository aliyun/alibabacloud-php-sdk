<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerResponseBody\adaptiveRouting;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerResponseBody\monitor;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerResponseBody\randomSteering;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerResponseBody\rules;

class GetLoadBalancerResponseBody extends Model
{
    /**
     * @var adaptiveRouting
     */
    public $adaptiveRouting;

    /**
     * @var int[]
     */
    public $defaultPools;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $fallbackPool;

    /**
     * @var int
     */
    public $id;

    /**
     * @var monitor
     */
    public $monitor;

    /**
     * @var string
     */
    public $name;

    /**
     * @var randomSteering
     */
    public $randomSteering;

    /**
     * @var mixed
     */
    public $regionPools;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var string
     */
    public $sessionAffinity;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $steeringPolicy;

    /**
     * @var mixed
     */
    public $subRegionPools;

    /**
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

    public function validate()
    {
        if (null !== $this->adaptiveRouting) {
            $this->adaptiveRouting->validate();
        }
        if (\is_array($this->defaultPools)) {
            Model::validateArray($this->defaultPools);
        }
        if (null !== $this->monitor) {
            $this->monitor->validate();
        }
        if (null !== $this->randomSteering) {
            $this->randomSteering->validate();
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adaptiveRouting) {
            $res['AdaptiveRouting'] = null !== $this->adaptiveRouting ? $this->adaptiveRouting->toArray($noStream) : $this->adaptiveRouting;
        }

        if (null !== $this->defaultPools) {
            if (\is_array($this->defaultPools)) {
                $res['DefaultPools'] = [];
                $n1 = 0;
                foreach ($this->defaultPools as $item1) {
                    $res['DefaultPools'][$n1++] = $item1;
                }
            }
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
            $res['Monitor'] = null !== $this->monitor ? $this->monitor->toArray($noStream) : $this->monitor;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->randomSteering) {
            $res['RandomSteering'] = null !== $this->randomSteering ? $this->randomSteering->toArray($noStream) : $this->randomSteering;
        }

        if (null !== $this->regionPools) {
            $res['RegionPools'] = $this->regionPools;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdaptiveRouting'])) {
            $model->adaptiveRouting = adaptiveRouting::fromMap($map['AdaptiveRouting']);
        }

        if (isset($map['DefaultPools'])) {
            if (!empty($map['DefaultPools'])) {
                $model->defaultPools = [];
                $n1 = 0;
                foreach ($map['DefaultPools'] as $item1) {
                    $model->defaultPools[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1++] = rules::fromMap($item1);
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
