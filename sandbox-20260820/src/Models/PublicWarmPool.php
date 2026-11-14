<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class PublicWarmPool extends Model
{
    /**
     * @var string
     */
    public $capacityObservedTime;

    /**
     * @var WarmPoolCapacityPolicy
     */
    public $capacityPolicy;

    /**
     * @var string
     */
    public $currentError;

    /**
     * @var bool
     */
    public $deleting;

    /**
     * @var int
     */
    public $preparing;

    /**
     * @var int
     */
    public $ready;

    /**
     * @var int
     */
    public $releasing;

    /**
     * @var bool
     */
    public $sourceUnavailable;

    /**
     * @var int
     */
    public $targetCapacity;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $templateID;
    protected $_name = [
        'capacityObservedTime' => 'capacityObservedTime',
        'capacityPolicy' => 'capacityPolicy',
        'currentError' => 'currentError',
        'deleting' => 'deleting',
        'preparing' => 'preparing',
        'ready' => 'ready',
        'releasing' => 'releasing',
        'sourceUnavailable' => 'sourceUnavailable',
        'targetCapacity' => 'targetCapacity',
        'teamID' => 'teamID',
        'templateID' => 'templateID',
    ];

    public function validate()
    {
        if (null !== $this->capacityPolicy) {
            $this->capacityPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityObservedTime) {
            $res['capacityObservedTime'] = $this->capacityObservedTime;
        }

        if (null !== $this->capacityPolicy) {
            $res['capacityPolicy'] = null !== $this->capacityPolicy ? $this->capacityPolicy->toArray($noStream) : $this->capacityPolicy;
        }

        if (null !== $this->currentError) {
            $res['currentError'] = $this->currentError;
        }

        if (null !== $this->deleting) {
            $res['deleting'] = $this->deleting;
        }

        if (null !== $this->preparing) {
            $res['preparing'] = $this->preparing;
        }

        if (null !== $this->ready) {
            $res['ready'] = $this->ready;
        }

        if (null !== $this->releasing) {
            $res['releasing'] = $this->releasing;
        }

        if (null !== $this->sourceUnavailable) {
            $res['sourceUnavailable'] = $this->sourceUnavailable;
        }

        if (null !== $this->targetCapacity) {
            $res['targetCapacity'] = $this->targetCapacity;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->templateID) {
            $res['templateID'] = $this->templateID;
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
        if (isset($map['capacityObservedTime'])) {
            $model->capacityObservedTime = $map['capacityObservedTime'];
        }

        if (isset($map['capacityPolicy'])) {
            $model->capacityPolicy = WarmPoolCapacityPolicy::fromMap($map['capacityPolicy']);
        }

        if (isset($map['currentError'])) {
            $model->currentError = $map['currentError'];
        }

        if (isset($map['deleting'])) {
            $model->deleting = $map['deleting'];
        }

        if (isset($map['preparing'])) {
            $model->preparing = $map['preparing'];
        }

        if (isset($map['ready'])) {
            $model->ready = $map['ready'];
        }

        if (isset($map['releasing'])) {
            $model->releasing = $map['releasing'];
        }

        if (isset($map['sourceUnavailable'])) {
            $model->sourceUnavailable = $map['sourceUnavailable'];
        }

        if (isset($map['targetCapacity'])) {
            $model->targetCapacity = $map['targetCapacity'];
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['templateID'])) {
            $model->templateID = $map['templateID'];
        }

        return $model;
    }
}
