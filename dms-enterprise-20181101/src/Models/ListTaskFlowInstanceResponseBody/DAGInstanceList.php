<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowInstanceResponseBody\DAGInstanceList\DAGInstance;

class DAGInstanceList extends Model
{
    /**
     * @var DAGInstance[]
     */
    public $DAGInstance;
    protected $_name = [
        'DAGInstance' => 'DAGInstance',
    ];

    public function validate()
    {
        if (\is_array($this->DAGInstance)) {
            Model::validateArray($this->DAGInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DAGInstance) {
            if (\is_array($this->DAGInstance)) {
                $res['DAGInstance'] = [];
                $n1 = 0;
                foreach ($this->DAGInstance as $item1) {
                    $res['DAGInstance'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DAGInstance'])) {
            if (!empty($map['DAGInstance'])) {
                $model->DAGInstance = [];
                $n1 = 0;
                foreach ($map['DAGInstance'] as $item1) {
                    $model->DAGInstance[$n1++] = DAGInstance::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
