<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchExportHttpApisRequest\extensionConfig;

class BatchExportHttpApisRequest extends Model
{
    /**
     * @var string[]
     */
    public $apiIds;

    /**
     * @var string
     */
    public $apiType;

    /**
     * @var extensionConfig
     */
    public $extensionConfig;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $gatewayId;
    protected $_name = [
        'apiIds' => 'apiIds',
        'apiType' => 'apiType',
        'extensionConfig' => 'extensionConfig',
        'format' => 'format',
        'gatewayId' => 'gatewayId',
    ];

    public function validate()
    {
        if (\is_array($this->apiIds)) {
            Model::validateArray($this->apiIds);
        }
        if (null !== $this->extensionConfig) {
            $this->extensionConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiIds) {
            if (\is_array($this->apiIds)) {
                $res['apiIds'] = [];
                $n1 = 0;
                foreach ($this->apiIds as $item1) {
                    $res['apiIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->apiType) {
            $res['apiType'] = $this->apiType;
        }

        if (null !== $this->extensionConfig) {
            $res['extensionConfig'] = null !== $this->extensionConfig ? $this->extensionConfig->toArray($noStream) : $this->extensionConfig;
        }

        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
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
        if (isset($map['apiIds'])) {
            if (!empty($map['apiIds'])) {
                $model->apiIds = [];
                $n1 = 0;
                foreach ($map['apiIds'] as $item1) {
                    $model->apiIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['apiType'])) {
            $model->apiType = $map['apiType'];
        }

        if (isset($map['extensionConfig'])) {
            $model->extensionConfig = extensionConfig::fromMap($map['extensionConfig']);
        }

        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        return $model;
    }
}
