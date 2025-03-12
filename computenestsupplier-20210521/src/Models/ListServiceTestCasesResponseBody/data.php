<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceTestCasesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The template name.
     *
     * @example test-1
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The service test case id.
     *
     * @example stc-83fcee1383354e35b151
     *
     * @var string
     */
    public $testCaseId;

    /**
     * @description The service test case name.
     *
     * @example case1
     *
     * @var string
     */
    public $testCaseName;

    /**
     * @description The service test config.
     *
     * @example ---
     * InstancePassword: "$[iact3-auto]"
     * @var string
     */
    public $testConfig;
    protected $_name = [
        'templateName' => 'TemplateName',
        'testCaseId'   => 'TestCaseId',
        'testCaseName' => 'TestCaseName',
        'testConfig'   => 'TestConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->testCaseId) {
            $res['TestCaseId'] = $this->testCaseId;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TestCaseId'])) {
            $model->testCaseId = $map['TestCaseId'];
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
