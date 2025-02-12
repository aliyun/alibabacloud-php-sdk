<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl\specialPolicies;

class trafficControl extends Model
{
    /**
     * @var int
     */
    public $apiDefault;
    /**
     * @var int
     */
    public $appDefault;
    /**
     * @var string
     */
    public $createdTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $modifiedTime;
    /**
     * @var specialPolicies
     */
    public $specialPolicies;
    /**
     * @var string
     */
    public $trafficControlId;
    /**
     * @var string
     */
    public $trafficControlName;
    /**
     * @var string
     */
    public $trafficControlUnit;
    /**
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
        if (null !== $this->specialPolicies) {
            $this->specialPolicies->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SpecialPolicies'] = null !== $this->specialPolicies ? $this->specialPolicies->toArray($noStream) : $this->specialPolicies;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
