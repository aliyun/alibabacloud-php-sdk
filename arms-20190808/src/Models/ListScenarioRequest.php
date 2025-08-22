<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class ListScenarioRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $sign;
    protected $_name = [
        'appId' => 'AppId',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'scenario' => 'Scenario',
        'sign' => 'Sign',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }

        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }

        return $model;
    }
}
