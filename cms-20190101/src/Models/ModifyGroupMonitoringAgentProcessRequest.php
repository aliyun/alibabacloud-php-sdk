<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyGroupMonitoringAgentProcessRequest\alertConfig;

class ModifyGroupMonitoringAgentProcessRequest extends Model
{
    /**
     * @var alertConfig[]
     */
    public $alertConfig;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $matchExpressFilterRelation;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'alertConfig' => 'AlertConfig',
        'groupId' => 'GroupId',
        'id' => 'Id',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->alertConfig)) {
            Model::validateArray($this->alertConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertConfig) {
            if (\is_array($this->alertConfig)) {
                $res['AlertConfig'] = [];
                $n1 = 0;
                foreach ($this->alertConfig as $item1) {
                    $res['AlertConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->matchExpressFilterRelation) {
            $res['MatchExpressFilterRelation'] = $this->matchExpressFilterRelation;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AlertConfig'])) {
            if (!empty($map['AlertConfig'])) {
                $model->alertConfig = [];
                $n1 = 0;
                foreach ($map['AlertConfig'] as $item1) {
                    $model->alertConfig[$n1] = alertConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MatchExpressFilterRelation'])) {
            $model->matchExpressFilterRelation = $map['MatchExpressFilterRelation'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
