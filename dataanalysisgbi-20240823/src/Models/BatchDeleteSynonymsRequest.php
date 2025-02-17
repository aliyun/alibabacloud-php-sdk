<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteSynonymsRequest extends Model
{
    /**
     * @var string[]
     */
    public $synonymIdKeys;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'synonymIdKeys' => 'synonymIdKeys',
        'workspaceId'   => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->synonymIdKeys)) {
            Model::validateArray($this->synonymIdKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->synonymIdKeys) {
            if (\is_array($this->synonymIdKeys)) {
                $res['synonymIdKeys'] = [];
                $n1                   = 0;
                foreach ($this->synonymIdKeys as $item1) {
                    $res['synonymIdKeys'][$n1++] = $item1;
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
        if (isset($map['synonymIdKeys'])) {
            if (!empty($map['synonymIdKeys'])) {
                $model->synonymIdKeys = [];
                $n1                   = 0;
                foreach ($map['synonymIdKeys'] as $item1) {
                    $model->synonymIdKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
