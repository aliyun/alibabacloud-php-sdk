<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl\specialPolicies;
use AlibabaCloud\Tea\Model;

class trafficControl extends Model
{
    /**
     * @var int
     */
    public $userDefault;

    /**
     * @var int
     */
    public $apiDefault;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $trafficControlUnit;

    /**
     * @var string
     */
    public $trafficControlName;

    /**
     * @var int
     */
    public $appDefault;

    /**
     * @var string
     */
    public $trafficControlId;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var specialPolicies
     */
    public $specialPolicies;
    protected $_name = [
        'userDefault'        => 'UserDefault',
        'apiDefault'         => 'ApiDefault',
        'modifiedTime'       => 'ModifiedTime',
        'description'        => 'Description',
        'trafficControlUnit' => 'TrafficControlUnit',
        'trafficControlName' => 'TrafficControlName',
        'appDefault'         => 'AppDefault',
        'trafficControlId'   => 'TrafficControlId',
        'createdTime'        => 'CreatedTime',
        'specialPolicies'    => 'SpecialPolicies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userDefault) {
            $res['UserDefault'] = $this->userDefault;
        }
        if (null !== $this->apiDefault) {
            $res['ApiDefault'] = $this->apiDefault;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->trafficControlUnit) {
            $res['TrafficControlUnit'] = $this->trafficControlUnit;
        }
        if (null !== $this->trafficControlName) {
            $res['TrafficControlName'] = $this->trafficControlName;
        }
        if (null !== $this->appDefault) {
            $res['AppDefault'] = $this->appDefault;
        }
        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->specialPolicies) {
            $res['SpecialPolicies'] = null !== $this->specialPolicies ? $this->specialPolicies->toMap() : null;
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
        if (isset($map['UserDefault'])) {
            $model->userDefault = $map['UserDefault'];
        }
        if (isset($map['ApiDefault'])) {
            $model->apiDefault = $map['ApiDefault'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TrafficControlUnit'])) {
            $model->trafficControlUnit = $map['TrafficControlUnit'];
        }
        if (isset($map['TrafficControlName'])) {
            $model->trafficControlName = $map['TrafficControlName'];
        }
        if (isset($map['AppDefault'])) {
            $model->appDefault = $map['AppDefault'];
        }
        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['SpecialPolicies'])) {
            $model->specialPolicies = specialPolicies::fromMap($map['SpecialPolicies']);
        }

        return $model;
    }
}
