<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListScenarioRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example b590lhguqs@28f515462******
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the business monitoring job.
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region.
     *
     * @example cn-zhangjaikou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The scenario where the business monitoring job is used. Valid values:
     *
     *   `USER-DEFINED`: user-defined. This is the default value.
     *   `EDAS-ROLLOUT`: application release in Enterprise Distributed Application Service (EDAS)
     *   `OAM-ROLLOUT`: application release based on Open Application Model (OAM)
     *   `MSC-CANARY`: canary release based on Microservice Engine (MSE)
     *
     * @example USER-DEFINED
     *
     * @var string
     */
    public $scenario;

    /**
     * @description The code of the business monitoring job. Set this parameter when you know the code of the business monitoring job you want to query.
     *
     * @example a9f8****
     *
     * @var string
     */
    public $sign;
    protected $_name = [
        'appId'    => 'AppId',
        'name'     => 'Name',
        'regionId' => 'RegionId',
        'scenario' => 'Scenario',
        'sign'     => 'Sign',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListScenarioRequest
     */
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
