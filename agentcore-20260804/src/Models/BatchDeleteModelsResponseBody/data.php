<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\BatchDeleteModelsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $modelIds;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'modelIds' => 'modelIds',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->modelIds)) {
            Model::validateArray($this->modelIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelIds) {
            if (\is_array($this->modelIds)) {
                $res['modelIds'] = [];
                $n1 = 0;
                foreach ($this->modelIds as $item1) {
                    $res['modelIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['modelIds'])) {
            if (!empty($map['modelIds'])) {
                $model->modelIds = [];
                $n1 = 0;
                foreach ($map['modelIds'] as $item1) {
                    $model->modelIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
