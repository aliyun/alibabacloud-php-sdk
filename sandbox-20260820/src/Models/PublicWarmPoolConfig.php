<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class PublicWarmPoolConfig extends Model
{
    /**
     * @var WarmPoolCapacityPolicy
     */
    public $capacityPolicy;

    /**
     * @var bool
     */
    public $deleting;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $templateID;
    protected $_name = [
        'capacityPolicy' => 'capacityPolicy',
        'deleting' => 'deleting',
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
        if (null !== $this->capacityPolicy) {
            $res['capacityPolicy'] = null !== $this->capacityPolicy ? $this->capacityPolicy->toArray($noStream) : $this->capacityPolicy;
        }

        if (null !== $this->deleting) {
            $res['deleting'] = $this->deleting;
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
        if (isset($map['capacityPolicy'])) {
            $model->capacityPolicy = WarmPoolCapacityPolicy::fromMap($map['capacityPolicy']);
        }

        if (isset($map['deleting'])) {
            $model->deleting = $map['deleting'];
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
