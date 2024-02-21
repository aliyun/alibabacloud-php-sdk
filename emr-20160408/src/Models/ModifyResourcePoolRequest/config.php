<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourcePoolRequest;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @example DEFAULT_SETTINGS
     *
     * @var string
     */
    public $category;

    /**
     * @example capacity
     *
     * @var string
     */
    public $configKey;

    /**
     * @example 100
     *
     * @var string
     */
    public $configValue;

    /**
     * @example 10
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $note;
    protected $_name = [
        'category'    => 'Category',
        'configKey'   => 'ConfigKey',
        'configValue' => 'ConfigValue',
        'id'          => 'Id',
        'note'        => 'Note',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        return $model;
    }
}
