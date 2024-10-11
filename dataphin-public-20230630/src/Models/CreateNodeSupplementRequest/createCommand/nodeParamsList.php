<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand\nodeParamsList\paramList;
use AlibabaCloud\Tea\Model;

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
        'nodeId'    => 'NodeId',
        'paramList' => 'ParamList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->paramList) {
            $res['ParamList'] = [];
            if (null !== $this->paramList && \is_array($this->paramList)) {
                $n = 0;
                foreach ($this->paramList as $item) {
                    $res['ParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeParamsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n                = 0;
                foreach ($map['ParamList'] as $item) {
                    $model->paramList[$n++] = null !== $item ? paramList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
