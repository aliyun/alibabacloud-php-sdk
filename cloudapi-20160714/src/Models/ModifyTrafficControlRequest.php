<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyTrafficControlRequest extends Model
{
    /**
     * @description The default throttling value for each API.
     *
     * @example 10000
     *
     * @var int
     */
    public $apiDefault;

    /**
     * @description The default throttling value for each app.
     *
     * @example 10000
     *
     * @var int
     */
    public $appDefault;

    /**
     * @description The description of the throttling policy.
     *
     * @example ThrottlingTestDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The security token included in the WebSocket request header. The system uses this token to authenticate the request.
     *
     * @example 4223a10e-eed3-46a6-8b7c-23003f488153
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the throttling policy.
     *
     * This parameter is required.
     * @example tf123456
     *
     * @var string
     */
    public $trafficControlId;

    /**
     * @description The throttling policy name. The name must be 4 to 50 characters in length and can contain letters, digits, and underscores (_). It cannot start with an underscore.
     *
     * @example ThrottlingTest
     *
     * @var string
     */
    public $trafficControlName;

    /**
     * @description The unit to be used in the throttling policy. Valid values:
     *
     *   **SECOND**
     *   **MINUTE**
     *   **HOUR**
     *   **DAY**
     *
     * @example HOUR
     *
     * @var string
     */
    public $trafficControlUnit;

    /**
     * @description The default throttling value for each user.
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
