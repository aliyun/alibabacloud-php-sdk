<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class DataValue extends Model
{
    /**
     * @description 配置描述
     *
     * @var string
     */
    public $configDescription;

    /**
     * @description 配置code
     *
     * @var string
     */
    public $configCode;

    /**
     * @description 配置父code
     *
     * @var string
     */
    public $parentCode;

    /**
     * @description key (用于前后端值传递)
     *
     * @var string
     */
    public $configKey;

    /**
     * @description value (用于前端展示)
     *
     * @var string
     */
    public $configValue;

    /**
     * @description 是否必选
     *
     * @var bool
     */
    public $requirement;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'configDescription' => 'configDescription',
        'configCode'        => 'configCode',
        'parentCode'        => 'parentCode',
        'configKey'         => 'configKey',
        'configValue'       => 'configValue',
        'requirement'       => 'requirement',
        'code'              => 'code',
        'description'       => 'description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
