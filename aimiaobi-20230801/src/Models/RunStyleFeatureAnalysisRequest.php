<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunStyleFeatureAnalysisRequest extends Model
{
    /**
     * @var string[]
     */
    public $contents;

    /**
     * @var int[]
     */
    public $materialIds;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'contents' => 'Contents',
        'materialIds' => 'MaterialIds',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        if (\is_array($this->materialIds)) {
            Model::validateArray($this->materialIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['Contents'] = [];
                $n1 = 0;
                foreach ($this->contents as $item1) {
                    $res['Contents'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->materialIds) {
            if (\is_array($this->materialIds)) {
                $res['MaterialIds'] = [];
                $n1 = 0;
                foreach ($this->materialIds as $item1) {
                    $res['MaterialIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n1 = 0;
                foreach ($map['Contents'] as $item1) {
                    $model->contents[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaterialIds'])) {
            if (!empty($map['MaterialIds'])) {
                $model->materialIds = [];
                $n1 = 0;
                foreach ($map['MaterialIds'] as $item1) {
                    $model->materialIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
