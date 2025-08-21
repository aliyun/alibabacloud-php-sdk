<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeXpackMonitorConfigResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string[]
     */
    public $endpoints;

    /**
     * @var string
     */
    public $esInstanceId;

    /**
     * @var string[]
     */
    public $pipelineIds;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'enable' => 'enable',
        'endpoints' => 'endpoints',
        'esInstanceId' => 'esInstanceId',
        'pipelineIds' => 'pipelineIds',
        'userName' => 'userName',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        if (\is_array($this->pipelineIds)) {
            Model::validateArray($this->pipelineIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['endpoints'] = [];
                $n1 = 0;
                foreach ($this->endpoints as $item1) {
                    $res['endpoints'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->esInstanceId) {
            $res['esInstanceId'] = $this->esInstanceId;
        }

        if (null !== $this->pipelineIds) {
            if (\is_array($this->pipelineIds)) {
                $res['pipelineIds'] = [];
                $n1 = 0;
                foreach ($this->pipelineIds as $item1) {
                    $res['pipelineIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['endpoints'])) {
            if (!empty($map['endpoints'])) {
                $model->endpoints = [];
                $n1 = 0;
                foreach ($map['endpoints'] as $item1) {
                    $model->endpoints[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['esInstanceId'])) {
            $model->esInstanceId = $map['esInstanceId'];
        }

        if (isset($map['pipelineIds'])) {
            if (!empty($map['pipelineIds'])) {
                $model->pipelineIds = [];
                $n1 = 0;
                foreach ($map['pipelineIds'] as $item1) {
                    $model->pipelineIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
