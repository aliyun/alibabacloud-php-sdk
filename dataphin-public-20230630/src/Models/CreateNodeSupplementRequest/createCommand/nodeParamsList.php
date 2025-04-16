<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand\nodeParamsList\paramList;

class nodeParamsList extends Model
{
    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var paramList[]
     */
    public $paramList;
    protected $_name = [
        'nodeId' => 'NodeId',
        'paramList' => 'ParamList',
    ];

    public function validate()
    {
        if (\is_array($this->paramList)) {
            Model::validateArray($this->paramList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->paramList) {
            if (\is_array($this->paramList)) {
                $res['ParamList'] = [];
                $n1 = 0;
                foreach ($this->paramList as $item1) {
                    $res['ParamList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n1 = 0;
                foreach ($map['ParamList'] as $item1) {
                    $model->paramList[$n1++] = paramList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
