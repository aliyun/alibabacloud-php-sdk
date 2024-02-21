<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo\ecmResourcePoolConfigList;

use AlibabaCloud\Tea\Model;

class ecmResourcePoolConfig extends Model
{
    /**
     * @example QUEUE_RESOURCE_LIMIT
     *
     * @var string
     */
    public $category;

    /**
     * @example minimum-user-limit-percent
     *
     * @var string
     */
    public $configKey;

    /**
     * @example RESOURCE_QUEUE_CONFIG
     *
     * @var string
     */
    public $configType;

    /**
     * @example 0
     *
     * @var string
     */
    public $configValue;

    /**
     * @example 2926
     *
     * @var int
     */
    public $id;

    /**
     * @example test
     *
     * @var string
     */
    public $note;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'category'    => 'Category',
        'configKey'   => 'ConfigKey',
        'configType'  => 'ConfigType',
        'configValue' => 'ConfigValue',
        'id'          => 'Id',
        'note'        => 'Note',
        'status'      => 'Status',
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
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecmResourcePoolConfig
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
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
