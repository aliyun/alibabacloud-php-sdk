<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\AiStatisticsConfig\pathFieldConfigs;

class AiStatisticsConfig extends Model
{
    /**
     * @var bool
     */
    public $logRequestContent;

    /**
     * @var bool
     */
    public $logResponseContent;

    /**
     * @var pathFieldConfigs[]
     */
    public $pathFieldConfigs;
    protected $_name = [
        'logRequestContent' => 'logRequestContent',
        'logResponseContent' => 'logResponseContent',
        'pathFieldConfigs' => 'pathFieldConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->pathFieldConfigs)) {
            Model::validateArray($this->pathFieldConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logRequestContent) {
            $res['logRequestContent'] = $this->logRequestContent;
        }

        if (null !== $this->logResponseContent) {
            $res['logResponseContent'] = $this->logResponseContent;
        }

        if (null !== $this->pathFieldConfigs) {
            if (\is_array($this->pathFieldConfigs)) {
                $res['pathFieldConfigs'] = [];
                $n1 = 0;
                foreach ($this->pathFieldConfigs as $item1) {
                    $res['pathFieldConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['logRequestContent'])) {
            $model->logRequestContent = $map['logRequestContent'];
        }

        if (isset($map['logResponseContent'])) {
            $model->logResponseContent = $map['logResponseContent'];
        }

        if (isset($map['pathFieldConfigs'])) {
            if (!empty($map['pathFieldConfigs'])) {
                $model->pathFieldConfigs = [];
                $n1 = 0;
                foreach ($map['pathFieldConfigs'] as $item1) {
                    $model->pathFieldConfigs[$n1] = pathFieldConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
