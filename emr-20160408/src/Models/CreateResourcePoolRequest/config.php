<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\CreateResourcePoolRequest;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $configKey;

    /**
     * @var string
     */
    public $configValue;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $configType;
    protected $_name = [
        'category'    => 'Category',
        'configKey'   => 'ConfigKey',
        'configValue' => 'ConfigValue',
        'note'        => 'Note',
        'targetId'    => 'TargetId',
        'configType'  => 'configType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        return $model;
    }
}
