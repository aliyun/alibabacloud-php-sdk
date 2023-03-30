<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest\entryRules;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest\gatewaySwimmingLaneRouteJson;
use AlibabaCloud\Tea\Model;

class CreateOrUpdateSwimmingLaneRequest extends Model
{
    /**
     * @description The language of the response. Valid values:****
     *
     *   **zh-CN**: Chinese
     *   **en-US**: English.
     *
     * > Default value: **zh-CN**.
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description Specifies whether to enable a lane.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description Specifies whether to set a routing rule for the lane. If an Ingress gateway is used, this parameter is not required.
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
     * @description The lane.
     *
     * @var entryRules[]
     */
    public $entryRules;

    /**
     * @var gatewaySwimmingLaneRouteJson
     */
    public $gatewaySwimmingLaneRouteJson;

    /**
     * @description The creation time.
     *
     * @example ""
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The update time.
     *
     * @example ""
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The group to which the lane belongs.
     *
     * @example 115
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the primary key. A value -1 specifies a request that is used to create a lane. A value greater than 0 specifies a request that is used to modify a lane.
     *
     * @example -1
     *
     * @var int
     */
    public $id;

    /**
     * @description The license key in use.
     *
     * @example 9wnrf04a0j@****
     *
     * @var string
     */
    public $licenseKey;

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
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The service source. Valid value: edasmsc.
     *
     * @example edasmsc
     *
     * @var string
     */
    public $source;

    /**
     * @description The value 0 indicates that the lane is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The tag.
     *
     * @example gray
     *
     * @var string
     */
    public $tag;

    /**
     * @description The Alibaba Cloud account. The format is a number, such as 136246975637\*\*\*\*. You can leave this parameter empty.
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'acceptLanguage'               => 'AcceptLanguage',
        'enable'                       => 'Enable',
        'enableRules'                  => 'EnableRules',
        'entryRule'                    => 'EntryRule',
        'entryRules'                   => 'EntryRules',
        'gatewaySwimmingLaneRouteJson' => 'GatewaySwimmingLaneRouteJson',
        'gmtCreate'                    => 'GmtCreate',
        'gmtModified'                  => 'GmtModified',
        'groupId'                      => 'GroupId',
        'id'                           => 'Id',
        'licenseKey'                   => 'LicenseKey',
        'name'                         => 'Name',
        'namespace'                    => 'Namespace',
        'regionId'                     => 'RegionId',
        'source'                       => 'Source',
        'status'                       => 'Status',
        'tag'                          => 'Tag',
        'userId'                       => 'UserId',
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
        if (null !== $this->gatewaySwimmingLaneRouteJson) {
            $res['GatewaySwimmingLaneRouteJson'] = null !== $this->gatewaySwimmingLaneRouteJson ? $this->gatewaySwimmingLaneRouteJson->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->licenseKey) {
            $res['LicenseKey'] = $this->licenseKey;
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
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateSwimmingLaneRequest
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
            $model->gatewaySwimmingLaneRouteJson = gatewaySwimmingLaneRouteJson::fromMap($map['GatewaySwimmingLaneRouteJson']);
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LicenseKey'])) {
            $model->licenseKey = $map['LicenseKey'];
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
