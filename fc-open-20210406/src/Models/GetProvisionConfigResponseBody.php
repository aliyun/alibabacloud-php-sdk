<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\ScheduledActions;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\TargetTrackingPolicies;

class GetProvisionConfigResponseBody extends Model {
    protected $_name = [
        'alwaysAllocateCPU' => 'alwaysAllocateCPU',
        'current' => 'current',
        'currentError' => 'currentError',
        'resource' => 'resource',
        'scheduledActions' => 'scheduledActions',
        'target' => 'target',
        'targetTrackingPolicies' => 'targetTrackingPolicies',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->alwaysAllocateCPU) {
            $res['alwaysAllocateCPU'] = $this->alwaysAllocateCPU;
        }
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->currentError) {
            $res['currentError'] = $this->currentError;
        }
        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
        }
        if (null !== $this->scheduledActions) {
            $res['scheduledActions'] = [];
            if(null !== $this->scheduledActions && is_array($this->scheduledActions)){
                $n = 0;
                foreach($this->scheduledActions as $item){
                    $res['scheduledActions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->target) {
            $res['target'] = $this->target;
        }
        if (null !== $this->targetTrackingPolicies) {
            $res['targetTrackingPolicies'] = [];
            if(null !== $this->targetTrackingPolicies && is_array($this->targetTrackingPolicies)){
                $n = 0;
                foreach($this->targetTrackingPolicies as $item){
                    $res['targetTrackingPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetProvisionConfigResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['alwaysAllocateCPU'])){
            $model->alwaysAllocateCPU = $map['alwaysAllocateCPU'];
        }
        if(isset($map['current'])){
            $model->current = $map['current'];
        }
        if(isset($map['currentError'])){
            $model->currentError = $map['currentError'];
        }
        if(isset($map['resource'])){
            $model->resource = $map['resource'];
        }
        if(isset($map['scheduledActions'])){
            if(!empty($map['scheduledActions'])){
                $model->scheduledActions = [];
                $n = 0;
                foreach($map['scheduledActions'] as $item) {
                    $model->scheduledActions[$n++] = null !== $item ? ScheduledActions::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['target'])){
            $model->target = $map['target'];
        }
        if(isset($map['targetTrackingPolicies'])){
            if(!empty($map['targetTrackingPolicies'])){
                $model->targetTrackingPolicies = [];
                $n = 0;
                foreach($map['targetTrackingPolicies'] as $item) {
                    $model->targetTrackingPolicies[$n++] = null !== $item ? TargetTrackingPolicies::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @var bool
     */
    public $alwaysAllocateCPU;

    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $currentError;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var ScheduledActions[]
     */
    public $scheduledActions;

    /**
     * @var int
     */
    public $target;

    /**
     * @var TargetTrackingPolicies[]
     */
    public $targetTrackingPolicies;

}
