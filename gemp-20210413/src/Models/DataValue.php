<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class DataValue extends Model
{
    /**
     * @example SMS
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $configDescription;

    /**
     * @example PROBLEM_REASON_DISASTER
     *
     * @var string
     */
    public $configCode;

    /**
     * @example PROBLEM_REASON
     *
     * @var string
     */
    public $parentCode;

    /**
     * @example 2
     *
     * @var string
     */
    public $configKey;

    /**
     * @var string
     */
    public $configValue;

    /**
     * @example true
     *
     * @var bool
     */
    public $requirement;
    protected $_name = [
        'code'              => 'code',
        'description'       => 'description',
        'configDescription' => 'configDescription',
        'configCode'        => 'configCode',
        'parentCode'        => 'parentCode',
        'configKey'         => 'configKey',
        'configValue'       => 'configValue',
        'requirement'       => 'requirement',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->configDescription) {
            $res['configDescription'] = $this->configDescription;
        }
        if (null !== $this->configCode) {
            $res['configCode'] = $this->configCode;
        }
        if (null !== $this->parentCode) {
            $res['parentCode'] = $this->parentCode;
        }
        if (null !== $this->configKey) {
            $res['configKey'] = $this->configKey;
        }
        if (null !== $this->configValue) {
            $res['configValue'] = $this->configValue;
        }
        if (null !== $this->requirement) {
            $res['requirement'] = $this->requirement;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['configDescription'])) {
            $model->configDescription = $map['configDescription'];
        }
        if (isset($map['configCode'])) {
            $model->configCode = $map['configCode'];
        }
        if (isset($map['parentCode'])) {
            $model->parentCode = $map['parentCode'];
        }
        if (isset($map['configKey'])) {
            $model->configKey = $map['configKey'];
        }
        if (isset($map['configValue'])) {
            $model->configValue = $map['configValue'];
        }
        if (isset($map['requirement'])) {
            $model->requirement = $map['requirement'];
        }

        return $model;
    }
}
