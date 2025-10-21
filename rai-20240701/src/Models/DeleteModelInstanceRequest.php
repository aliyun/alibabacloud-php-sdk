<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class DeleteModelInstanceRequest extends Model
{
    /**
     * @var int[]
     */
    public $modelInstanceIdList;
    protected $_name = [
        'modelInstanceIdList' => 'ModelInstanceIdList',
    ];

    public function validate()
    {
        if (\is_array($this->modelInstanceIdList)) {
            Model::validateArray($this->modelInstanceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelInstanceIdList) {
            if (\is_array($this->modelInstanceIdList)) {
                $res['ModelInstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->modelInstanceIdList as $item1) {
                    $res['ModelInstanceIdList'][$n1] = $item1;
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
        if (isset($map['ModelInstanceIdList'])) {
            if (!empty($map['ModelInstanceIdList'])) {
                $model->modelInstanceIdList = [];
                $n1 = 0;
                foreach ($map['ModelInstanceIdList'] as $item1) {
                    $model->modelInstanceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
