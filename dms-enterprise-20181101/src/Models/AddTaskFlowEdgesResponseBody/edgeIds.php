<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddTaskFlowEdgesResponseBody;

use AlibabaCloud\Dara\Model;

class edgeIds extends Model
{
    /**
     * @var int[]
     */
    public $edgeId;
    protected $_name = [
        'edgeId' => 'EdgeId',
    ];

    public function validate()
    {
        if (\is_array($this->edgeId)) {
            Model::validateArray($this->edgeId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edgeId) {
            if (\is_array($this->edgeId)) {
                $res['EdgeId'] = [];
                $n1            = 0;
                foreach ($this->edgeId as $item1) {
                    $res['EdgeId'][$n1++] = $item1;
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
        if (isset($map['EdgeId'])) {
            if (!empty($map['EdgeId'])) {
                $model->edgeId = [];
                $n1            = 0;
                foreach ($map['EdgeId'] as $item1) {
                    $model->edgeId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
