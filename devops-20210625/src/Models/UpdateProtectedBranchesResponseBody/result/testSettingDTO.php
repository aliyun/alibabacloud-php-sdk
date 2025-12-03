<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesResponseBody\result\testSettingDTO\checkConfig;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesResponseBody\result\testSettingDTO\checkTaskQualityConfig;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesResponseBody\result\testSettingDTO\codeGuidelinesDetection;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesResponseBody\result\testSettingDTO\sensitiveInfoDetection;

class testSettingDTO extends Model
{
    /**
     * @var checkConfig
     */
    public $checkConfig;

    /**
     * @var checkTaskQualityConfig
     */
    public $checkTaskQualityConfig;

    /**
     * @var codeGuidelinesDetection
     */
    public $codeGuidelinesDetection;

    /**
     * @var bool
     */
    public $isRequired;

    /**
     * @var sensitiveInfoDetection
     */
    public $sensitiveInfoDetection;
    protected $_name = [
        'checkConfig' => 'checkConfig',
        'checkTaskQualityConfig' => 'checkTaskQualityConfig',
        'codeGuidelinesDetection' => 'codeGuidelinesDetection',
        'isRequired' => 'isRequired',
        'sensitiveInfoDetection' => 'sensitiveInfoDetection',
    ];

    public function validate()
    {
        if (null !== $this->checkConfig) {
            $this->checkConfig->validate();
        }
        if (null !== $this->checkTaskQualityConfig) {
            $this->checkTaskQualityConfig->validate();
        }
        if (null !== $this->codeGuidelinesDetection) {
            $this->codeGuidelinesDetection->validate();
        }
        if (null !== $this->sensitiveInfoDetection) {
            $this->sensitiveInfoDetection->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkConfig) {
            $res['checkConfig'] = null !== $this->checkConfig ? $this->checkConfig->toArray($noStream) : $this->checkConfig;
        }

        if (null !== $this->checkTaskQualityConfig) {
            $res['checkTaskQualityConfig'] = null !== $this->checkTaskQualityConfig ? $this->checkTaskQualityConfig->toArray($noStream) : $this->checkTaskQualityConfig;
        }

        if (null !== $this->codeGuidelinesDetection) {
            $res['codeGuidelinesDetection'] = null !== $this->codeGuidelinesDetection ? $this->codeGuidelinesDetection->toArray($noStream) : $this->codeGuidelinesDetection;
        }

        if (null !== $this->isRequired) {
            $res['isRequired'] = $this->isRequired;
        }

        if (null !== $this->sensitiveInfoDetection) {
            $res['sensitiveInfoDetection'] = null !== $this->sensitiveInfoDetection ? $this->sensitiveInfoDetection->toArray($noStream) : $this->sensitiveInfoDetection;
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
        if (isset($map['checkConfig'])) {
            $model->checkConfig = checkConfig::fromMap($map['checkConfig']);
        }

        if (isset($map['checkTaskQualityConfig'])) {
            $model->checkTaskQualityConfig = checkTaskQualityConfig::fromMap($map['checkTaskQualityConfig']);
        }

        if (isset($map['codeGuidelinesDetection'])) {
            $model->codeGuidelinesDetection = codeGuidelinesDetection::fromMap($map['codeGuidelinesDetection']);
        }

        if (isset($map['isRequired'])) {
            $model->isRequired = $map['isRequired'];
        }

        if (isset($map['sensitiveInfoDetection'])) {
            $model->sensitiveInfoDetection = sensitiveInfoDetection::fromMap($map['sensitiveInfoDetection']);
        }

        return $model;
    }
}
