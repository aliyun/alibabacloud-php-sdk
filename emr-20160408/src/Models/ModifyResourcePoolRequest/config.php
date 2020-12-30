<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourcePoolRequest;

use AlibabaCloud\Tea\Model;

class config extends Model
{
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
    public $category;

    /**
     * @var string
     */
    public $configKey;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'configValue' => 'ConfigValue',
        'note'        => 'Note',
        'category'    => 'Category',
        'configKey'   => 'ConfigKey',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
