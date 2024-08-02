<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ConsumeProcessor extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var ConsumeProcessorConfiguration
     */
    public $configuration;

    /**
     * @example 1717171200
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 过滤content字段
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example consume-processor-1
     *
     * @var string
     */
    public $processorId;

    /**
     * @description This parameter is required.
     *
     * @example 字段过滤处理
     *
     * @var string
     */
    public $processorName;

    /**
     * @example 1717171200
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'configuration' => 'configuration',
        'createTime'    => 'createTime',
        'description'   => 'description',
        'processorId'   => 'processorId',
        'processorName' => 'processorName',
        'updateTime'    => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['configuration'] = null !== $this->configuration ? $this->configuration->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->processorId) {
            $res['processorId'] = $this->processorId;
        }
        if (null !== $this->processorName) {
            $res['processorName'] = $this->processorName;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConsumeProcessor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configuration'])) {
            $model->configuration = ConsumeProcessorConfiguration::fromMap($map['configuration']);
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['processorId'])) {
            $model->processorId = $map['processorId'];
        }
        if (isset($map['processorName'])) {
            $model->processorName = $map['processorName'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
