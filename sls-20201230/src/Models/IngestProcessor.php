<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class IngestProcessor extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var IngestProcessorConfiguration
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
     * @example 字段过滤处理
     *
     * @var string
     */
    public $displayName;

    /**
     * @description This parameter is required.
     *
     * @example ingest-processor-1
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
        'displayName'   => 'displayName',
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
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
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
     * @return IngestProcessor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configuration'])) {
            $model->configuration = IngestProcessorConfiguration::fromMap($map['configuration']);
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
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
