<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class LaneMqGroupInfo extends Model
{
    /**
     * @var bool
     */
    public $allowClean;

    /**
     * @var int
     */
    public $laneId;

    /**
     * @var string
     */
    public $laneName;

    /**
     * @var MqGroup
     */
    public $mqGroups;
    protected $_name = [
        'allowClean' => 'allowClean',
        'laneId' => 'laneId',
        'laneName' => 'laneName',
        'mqGroups' => 'mqGroups',
    ];

    public function validate()
    {
        if (null !== $this->mqGroups) {
            $this->mqGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowClean) {
            $res['allowClean'] = $this->allowClean;
        }

        if (null !== $this->laneId) {
            $res['laneId'] = $this->laneId;
        }

        if (null !== $this->laneName) {
            $res['laneName'] = $this->laneName;
        }

        if (null !== $this->mqGroups) {
            $res['mqGroups'] = null !== $this->mqGroups ? $this->mqGroups->toArray($noStream) : $this->mqGroups;
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
        if (isset($map['allowClean'])) {
            $model->allowClean = $map['allowClean'];
        }

        if (isset($map['laneId'])) {
            $model->laneId = $map['laneId'];
        }

        if (isset($map['laneName'])) {
            $model->laneName = $map['laneName'];
        }

        if (isset($map['mqGroups'])) {
            $model->mqGroups = MqGroup::fromMap($map['mqGroups']);
        }

        return $model;
    }
}
