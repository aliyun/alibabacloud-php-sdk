<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class CreateTrafficControlRequest extends Model
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
    public $description;

    /**
     * @var string
     */
    public $securityToken;

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
        'apiDefault' => 'ApiDefault',
        'appDefault' => 'AppDefault',
        'description' => 'Description',
        'securityToken' => 'SecurityToken',
        'trafficControlName' => 'TrafficControlName',
        'trafficControlUnit' => 'TrafficControlUnit',
        'userDefault' => 'UserDefault',
    ];

    public function validate()
    {
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
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
