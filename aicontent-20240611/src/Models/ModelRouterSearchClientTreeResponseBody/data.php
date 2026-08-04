<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterSearchClientTreeResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int[]
     */
    public $matchedDeptIds;
    protected $_name = [
        'matchedDeptIds' => 'matchedDeptIds',
    ];

    public function validate()
    {
        if (\is_array($this->matchedDeptIds)) {
            Model::validateArray($this->matchedDeptIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchedDeptIds) {
            if (\is_array($this->matchedDeptIds)) {
                $res['matchedDeptIds'] = [];
                $n1 = 0;
                foreach ($this->matchedDeptIds as $item1) {
                    $res['matchedDeptIds'][$n1] = $item1;
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
        if (isset($map['matchedDeptIds'])) {
            if (!empty($map['matchedDeptIds'])) {
                $model->matchedDeptIds = [];
                $n1 = 0;
                foreach ($map['matchedDeptIds'] as $item1) {
                    $model->matchedDeptIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
