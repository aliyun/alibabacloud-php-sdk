<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormV2InstanceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormV2InstanceRequest\engineList\nodeGroupList;

class engineList extends Model
{
    /**
     * @var string
     */
    public $engineType;

    /**
     * @var nodeGroupList[]
     */
    public $nodeGroupList;
    protected $_name = [
        'engineType' => 'EngineType',
        'nodeGroupList' => 'NodeGroupList',
    ];

    public function validate()
    {
        if (\is_array($this->nodeGroupList)) {
            Model::validateArray($this->nodeGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->nodeGroupList) {
            if (\is_array($this->nodeGroupList)) {
                $res['NodeGroupList'] = [];
                $n1 = 0;
                foreach ($this->nodeGroupList as $item1) {
                    $res['NodeGroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['NodeGroupList'])) {
            if (!empty($map['NodeGroupList'])) {
                $model->nodeGroupList = [];
                $n1 = 0;
                foreach ($map['NodeGroupList'] as $item1) {
                    $model->nodeGroupList[$n1] = nodeGroupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
