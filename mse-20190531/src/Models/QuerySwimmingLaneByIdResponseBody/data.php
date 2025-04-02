<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QuerySwimmingLaneByIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\QuerySwimmingLaneByIdResponseBody\data\entryRules;

class data extends Model
{
    /**
     * @var bool
     */
    public $pathIndependentPercentageEnable;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var bool
     */
    public $enableRules;

    /**
     * @var string
     */
    public $entryRule;

    /**
     * @var entryRules[]
     */
    public $entryRules;

    /**
     * @var string
     */
    public $gatewaySwimmingLaneRouteJson;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'pathIndependentPercentageEnable' => 'PathIndependentPercentageEnable',
        'enable' => 'enable',
        'enableRules' => 'enableRules',
        'entryRule' => 'entryRule',
        'entryRules' => 'entryRules',
        'gatewaySwimmingLaneRouteJson' => 'gatewaySwimmingLaneRouteJson',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'groupId' => 'groupId',
        'id' => 'id',
        'name' => 'name',
        'regionId' => 'regionId',
        'status' => 'status',
        'tag' => 'tag',
    ];

    public function validate()
    {
        if (\is_array($this->entryRules)) {
            Model::validateArray($this->entryRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pathIndependentPercentageEnable) {
            $res['PathIndependentPercentageEnable'] = $this->pathIndependentPercentageEnable;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->enableRules) {
            $res['enableRules'] = $this->enableRules;
        }

        if (null !== $this->entryRule) {
            $res['entryRule'] = $this->entryRule;
        }

        if (null !== $this->entryRules) {
            if (\is_array($this->entryRules)) {
                $res['entryRules'] = [];
                $n1 = 0;
                foreach ($this->entryRules as $item1) {
                    $res['entryRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->gatewaySwimmingLaneRouteJson) {
            $res['gatewaySwimmingLaneRouteJson'] = $this->gatewaySwimmingLaneRouteJson;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
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
        if (isset($map['PathIndependentPercentageEnable'])) {
            $model->pathIndependentPercentageEnable = $map['PathIndependentPercentageEnable'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['enableRules'])) {
            $model->enableRules = $map['enableRules'];
        }

        if (isset($map['entryRule'])) {
            $model->entryRule = $map['entryRule'];
        }

        if (isset($map['entryRules'])) {
            if (!empty($map['entryRules'])) {
                $model->entryRules = [];
                $n1 = 0;
                foreach ($map['entryRules'] as $item1) {
                    $model->entryRules[$n1++] = entryRules::fromMap($item1);
                }
            }
        }

        if (isset($map['gatewaySwimmingLaneRouteJson'])) {
            $model->gatewaySwimmingLaneRouteJson = $map['gatewaySwimmingLaneRouteJson'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        return $model;
    }
}
