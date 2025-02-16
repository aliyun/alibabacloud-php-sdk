<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateLoadBalancerShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $adaptiveRoutingShrink;
    /**
     * @var string
     */
    public $defaultPoolsShrink;
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
     * @var string
     */
    public $monitorShrink;
    /**
     * @var string
     */
    public $randomSteeringShrink;
    /**
     * @var mixed
     */
    public $regionPools;
    /**
     * @var string
     */
    public $rulesShrink;
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
        'adaptiveRoutingShrink' => 'AdaptiveRouting',
        'defaultPoolsShrink'    => 'DefaultPools',
        'description'           => 'Description',
        'enabled'               => 'Enabled',
        'fallbackPool'          => 'FallbackPool',
        'id'                    => 'Id',
        'monitorShrink'         => 'Monitor',
        'randomSteeringShrink'  => 'RandomSteering',
        'regionPools'           => 'RegionPools',
        'rulesShrink'           => 'Rules',
        'sessionAffinity'       => 'SessionAffinity',
        'siteId'                => 'SiteId',
        'steeringPolicy'        => 'SteeringPolicy',
        'subRegionPools'        => 'SubRegionPools',
        'ttl'                   => 'Ttl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
