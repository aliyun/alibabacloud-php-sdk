<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\ValidateConfigSettingResponseBody\configValidationResults;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\ValidateConfigSettingResponseBody\configValidationResults\configValidationResult\configOption;
use AlibabaCloud\Tea\Model;

class configValidationResult extends Model
{
    /**
     * @var string
     */
    public $optionName;

    /**
     * @var string
     */
    public $pathName;

    /**
     * @var string
     */
    public $resultMessage;

    /**
     * @var string
     */
    public $resultSeverity;

    /**
     * @var configOption
     */
    public $configOption;
    protected $_name = [
        'optionName'     => 'OptionName',
        'pathName'       => 'PathName',
        'resultMessage'  => 'ResultMessage',
        'resultSeverity' => 'ResultSeverity',
        'configOption'   => 'ConfigOption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->optionName) {
            $res['OptionName'] = $this->optionName;
        }
        if (null !== $this->pathName) {
            $res['PathName'] = $this->pathName;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }
        if (null !== $this->resultSeverity) {
            $res['ResultSeverity'] = $this->resultSeverity;
        }
        if (null !== $this->configOption) {
            $res['ConfigOption'] = null !== $this->configOption ? $this->configOption->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configValidationResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OptionName'])) {
            $model->optionName = $map['OptionName'];
        }
        if (isset($map['PathName'])) {
            $model->pathName = $map['PathName'];
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }
        if (isset($map['ResultSeverity'])) {
            $model->resultSeverity = $map['ResultSeverity'];
        }
        if (isset($map['ConfigOption'])) {
            $model->configOption = configOption::fromMap($map['ConfigOption']);
        }

        return $model;
    }
}
