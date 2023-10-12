<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneShrinkRequest\entryRules;
use AlibabaCloud\Tea\Model;

class CreateOrUpdateSwimmingLaneShrinkRequest extends Model
{
    /**
     * @description The language of the response. Valid values: zh and en. Default value: zh. The value zh indicates Chinese, and the value en indicates English.
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description Specifies whether to enable the lane.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description Specifies whether to configure a routing rule for the lane. If an Ingress gateway is used, this parameter is not required.
     *
     * @example false
     *
     * @var bool
     */
    public $enableRules;

    /**
     * @description The JSON string.
     *
     * @example {}
     *
     * @var string
     */
    public $entryRule;

    /**
     * @var entryRules[]
     */
    public $entryRules;

    /**
     * @description The information about the routing rule for the gateway. This parameter is required when a cloud-native gateway is used as the ingress.
     *
     * @var string
     */
    public $gatewaySwimmingLaneRouteJsonShrink;

    /**
     * @description The language of the response. Valid values:****
     *
     *   **zh-CN**: Chinese
     *   **en-US**: English
     *
     * > Default value: **zh-CN**.
     * @example 115
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the primary key. The value -1 indicates a request that is used to create a lane. A value greater than 0 indicates a request that is used to modify a lane.
     *
     * @example -1
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the lane.
     *
     * @example Test lane
     *
     * @var string
     */
    public $name;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the primary key. The value -1 specifies a request that is used to create a lane. A value greater than 0 specifies a request that is used to modify a lane.
     *
     * @example gray
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'acceptLanguage'                     => 'AcceptLanguage',
        'enable'                             => 'Enable',
        'enableRules'                        => 'EnableRules',
        'entryRule'                          => 'EntryRule',
        'entryRules'                         => 'EntryRules',
        'gatewaySwimmingLaneRouteJsonShrink' => 'GatewaySwimmingLaneRouteJson',
        'groupId'                            => 'GroupId',
        'id'                                 => 'Id',
        'name'                               => 'Name',
        'namespace'                          => 'Namespace',
        'regionId'                           => 'RegionId',
        'tag'                                => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['EntryRules'] = [];
            if (null !== $this->entryRules && \is_array($this->entryRules)) {
                $n = 0;
                foreach ($this->entryRules as $item) {
                    $res['EntryRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateSwimmingLaneShrinkRequest
     */
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
                $n                 = 0;
                foreach ($map['EntryRules'] as $item) {
                    $model->entryRules[$n++] = null !== $item ? entryRules::fromMap($item) : $item;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
