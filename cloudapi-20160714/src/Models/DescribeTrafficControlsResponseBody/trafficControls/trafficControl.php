<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl\specialPolicies;
use AlibabaCloud\Tea\Model;

class trafficControl extends Model
{
    /**
     * @description The description of the throttling policy.
     *
     * @example 20000
     *
     * @var int
     */
    public $apiDefault;

    /**
     * @description The creation time (UTC) of the throttling policy.
     *
     * @example 8000
     *
     * @var int
     */
    public $appDefault;

    /**
     * @description The type of the special throttling policy. Valid values:
     *
     *   **APP**
     *   **USER**
     *
     * @example 2016-01-27T10:19:39Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The name of the throttling policy.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The unit to be used in the throttling policy. Valid values:
     *
     *   MINUTE
     *   HOUR
     *   DAY
     *
     * @example 2016-01-27T10:34:38Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The returned information about a special throttling policy. It is an array consisting of Special data.
     *
     * @var specialPolicies
     */
    public $specialPolicies;

    /**
     * @description The returned information about a special throttling policy. It is an array consisting of SpecialPolicy data.
     *
     * @example cfed6c970d45481dbe136d6b5ac68c41
     *
     * @var string
     */
    public $trafficControlId;

    /**
     * @description The ID of the throttling policy.
     *
     * @example wulingtestq1
     *
     * @var string
     */
    public $trafficControlName;

    /**
     * @description The default throttling value for each app.
     *
     * @example Minute
     *
     * @var string
     */
    public $trafficControlUnit;

    /**
     * @description The last modification time (UTC) of the throttling policy.
     *
     * @example 15000
     *
     * @var int
     */
    public $userDefault;
    protected $_name = [
        'apiDefault'         => 'ApiDefault',
        'appDefault'         => 'AppDefault',
        'createdTime'        => 'CreatedTime',
        'description'        => 'Description',
        'modifiedTime'       => 'ModifiedTime',
        'specialPolicies'    => 'SpecialPolicies',
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
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->specialPolicies) {
            $res['SpecialPolicies'] = null !== $this->specialPolicies ? $this->specialPolicies->toMap() : null;
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
     * @return trafficControl
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['SpecialPolicies'])) {
            $model->specialPolicies = specialPolicies::fromMap($map['SpecialPolicies']);
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
