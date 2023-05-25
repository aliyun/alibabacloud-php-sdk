<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyTrafficControlRequest extends Model
{
    /**
     * @description The default throttling value for each app.
     *
     * @example 10000
     *
     * @var int
     */
    public $apiDefault;

    /**
     * @description ThrottlingTestDescription
     *
     * @example 10000
     *
     * @var int
     */
    public $appDefault;

    /**
     * @description The ID of the request.
     *
     * @example *   This API is intended for API providers.
     *   The modifications take effect on the bound APIs instantly.
     *   The QPS limit on this operation is 50 per user.
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description ThrottlingTest
     *
     * @example tf123456
     *
     * @var string
     */
    public $trafficControlId;

    /**
     * @description The unit to be used in the throttling policy. Valid values:
     *
     *   **SECOND**
     *   **MINUTE**
     *   **HOUR**
     *   **DAY**
     *
     * @example The default throttling value for each API.
     *
     * @var string
     */
    public $trafficControlName;

    /**
     * @description The default throttling value for each user.
     *
     * @example HOUR
     *
     * @var string
     */
    public $trafficControlUnit;

    /**
     * @description The description of the throttling policy.
     *
     * @example 10000
     *
     * @var int
     */
    public $userDefault;
    protected $_name = [
        'apiDefault'         => 'ApiDefault',
        'appDefault'         => 'AppDefault',
        'description'        => 'Description',
        'securityToken'      => 'SecurityToken',
        'trafficControlId'   => 'TrafficControlId',
        'trafficControlName' => 'TrafficControlName',
        'trafficControlUnit' => 'TrafficControlUnit',
        'userDefault'        => 'UserDefault',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiDefault) {
            $res['ApiDefault'] = $this->apiDefault;
        }
        if (null !== $this->appDefault) {
            $res['AppDefault'] = $this->appDefault;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
        }
        if (null !== $this->trafficControlName) {
            $res['TrafficControlName'] = $this->trafficControlName;
        }
        if (null !== $this->trafficControlUnit) {
            $res['TrafficControlUnit'] = $this->trafficControlUnit;
        }
        if (null !== $this->userDefault) {
            $res['UserDefault'] = $this->userDefault;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTrafficControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiDefault'])) {
            $model->apiDefault = $map['ApiDefault'];
        }
        if (isset($map['AppDefault'])) {
            $model->appDefault = $map['AppDefault'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
        }
        if (isset($map['TrafficControlName'])) {
            $model->trafficControlName = $map['TrafficControlName'];
        }
        if (isset($map['TrafficControlUnit'])) {
            $model->trafficControlUnit = $map['TrafficControlUnit'];
        }
        if (isset($map['UserDefault'])) {
            $model->userDefault = $map['UserDefault'];
        }

        return $model;
    }
}
