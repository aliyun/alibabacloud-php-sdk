<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyCfwInstanceRequest\updateList;

class ModifyCfwInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var updateList[]
     */
    public $updateList;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'updateList' => 'UpdateList',
    ];

    public function validate()
    {
        if (\is_array($this->updateList)) {
            Model::validateArray($this->updateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->updateList) {
            if (\is_array($this->updateList)) {
                $res['UpdateList'] = [];
                $n1 = 0;
                foreach ($this->updateList as $item1) {
                    $res['UpdateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['UpdateList'])) {
            if (!empty($map['UpdateList'])) {
                $model->updateList = [];
                $n1 = 0;
                foreach ($map['UpdateList'] as $item1) {
                    $model->updateList[$n1] = updateList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
