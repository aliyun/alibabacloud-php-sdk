<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceTestCaseRequest extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The service ID.
     *
     * This parameter is required.
     * @example service-0e6fca6a51a544xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The service version.
     *
     * This parameter is required.
     * @example draft
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description The template name.
     *
     * This parameter is required.
     * @example Custom_Image_Ecs
     *
     * @var string
     */
    public $templateName;

    /**
     * @description Service Test case name.
     *
     * This parameter is required.
     * @example case1
     *
     * @var string
     */
    public $testCaseName;

    /**
     * @description The service test config
     *
     * This parameter is required.
     * @example ---
     * InstancePassword: "$[iact3-auto]"
     * @var string
     */
    public $testConfig;
    protected $_name = [
        'regionId'       => 'RegionId',
        'serviceId'      => 'ServiceId',
        'serviceVersion' => 'ServiceVersion',
        'templateName'   => 'TemplateName',
        'testCaseName'   => 'TestCaseName',
        'testConfig'     => 'TestConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->testCaseName) {
            $res['TestCaseName'] = $this->testCaseName;
        }
        if (null !== $this->testConfig) {
            $res['TestConfig'] = $this->testConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceTestCaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TestCaseName'])) {
            $model->testCaseName = $map['TestCaseName'];
        }
        if (isset($map['TestConfig'])) {
            $model->testConfig = $map['TestConfig'];
        }

        return $model;
    }
}
