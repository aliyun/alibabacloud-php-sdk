<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneShrinkRequest\entryRules;

class CreateOrUpdateSwimmingLaneShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

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
    public $gatewaySwimmingLaneRouteJsonShrink;

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
    public $namespace;

    /**
     * @var bool
     */
    public $pathIndependentPercentageEnable;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'enable' => 'Enable',
        'enableRules' => 'EnableRules',
        'entryRule' => 'EntryRule',
        'entryRules' => 'EntryRules',
        'gatewaySwimmingLaneRouteJsonShrink' => 'GatewaySwimmingLaneRouteJson',
        'groupId' => 'GroupId',
        'id' => 'Id',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'pathIndependentPercentageEnable' => 'PathIndependentPercentageEnable',
        'regionId' => 'RegionId',
        'tag' => 'Tag',
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
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->enableRules) {
            $res['EnableRules'] = $this->enableRules;
        }

        if (null !== $this->entryRule) {
            $res['EntryRule'] = $this->entryRule;
        }

        if (null !== $this->entryRules) {
            if (\is_array($this->entryRules)) {
                $res['EntryRules'] = [];
                $n1 = 0;
                foreach ($this->entryRules as $item1) {
                    $res['EntryRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->gatewaySwimmingLaneRouteJsonShrink) {
            $res['GatewaySwimmingLaneRouteJson'] = $this->gatewaySwimmingLaneRouteJsonShrink;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->pathIndependentPercentageEnable) {
            $res['PathIndependentPercentageEnable'] = $this->pathIndependentPercentageEnable;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['EnableRules'])) {
            $model->enableRules = $map['EnableRules'];
        }

        if (isset($map['EntryRule'])) {
            $model->entryRule = $map['EntryRule'];
        }

        if (isset($map['EntryRules'])) {
            if (!empty($map['EntryRules'])) {
                $model->entryRules = [];
                $n1 = 0;
                foreach ($map['EntryRules'] as $item1) {
                    $model->entryRules[$n1++] = entryRules::fromMap($item1);
                }
            }
        }

        if (isset($map['GatewaySwimmingLaneRouteJson'])) {
            $model->gatewaySwimmingLaneRouteJsonShrink = $map['GatewaySwimmingLaneRouteJson'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['PathIndependentPercentageEnable'])) {
            $model->pathIndependentPercentageEnable = $map['PathIndependentPercentageEnable'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
