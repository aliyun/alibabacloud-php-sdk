<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OperateInstanceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OperateInstanceRequest\operateCommand\instanceIdList;

class operateCommand extends Model
{
    /**
     * @var instanceIdList[]
     */
    public $instanceIdList;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'instanceIdList' => 'InstanceIdList',
        'operation' => 'Operation',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIdList)) {
            Model::validateArray($this->instanceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIdList) {
            if (\is_array($this->instanceIdList)) {
                $res['InstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->instanceIdList as $item1) {
                    $res['InstanceIdList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = [];
                $n1 = 0;
                foreach ($map['InstanceIdList'] as $item1) {
                    $model->instanceIdList[$n1] = instanceIdList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
