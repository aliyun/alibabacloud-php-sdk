<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;

class DeleteBusinessLogicRequest extends Model
{
    /**
     * @var string[]
     */
    public $businessLogicIdKeys;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'businessLogicIdKeys' => 'businessLogicIdKeys',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->businessLogicIdKeys)) {
            Model::validateArray($this->businessLogicIdKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessLogicIdKeys) {
            if (\is_array($this->businessLogicIdKeys)) {
                $res['businessLogicIdKeys'] = [];
                $n1 = 0;
                foreach ($this->businessLogicIdKeys as $item1) {
                    $res['businessLogicIdKeys'][$n1++] = $item1;
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
        if (isset($map['businessLogicIdKeys'])) {
            if (!empty($map['businessLogicIdKeys'])) {
                $model->businessLogicIdKeys = [];
                $n1 = 0;
                foreach ($map['businessLogicIdKeys'] as $item1) {
                    $model->businessLogicIdKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
