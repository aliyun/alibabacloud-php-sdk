<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\AddAntChainSubnetMemberCheckResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\AddAntChainSubnetMemberCheckResponseBody\result\consortiumMemberInfoList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var consortiumMemberInfoList[]
     */
    public $consortiumMemberInfoList;
    protected $_name = [
        'consortiumMemberInfoList' => 'ConsortiumMemberInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumMemberInfoList) {
            $res['ConsortiumMemberInfoList'] = [];
            if (null !== $this->consortiumMemberInfoList && \is_array($this->consortiumMemberInfoList)) {
                $n = 0;
                foreach ($this->consortiumMemberInfoList as $item) {
                    $res['ConsortiumMemberInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumMemberInfoList'])) {
            if (!empty($map['ConsortiumMemberInfoList'])) {
                $model->consortiumMemberInfoList = [];
                $n                               = 0;
                foreach ($map['ConsortiumMemberInfoList'] as $item) {
                    $model->consortiumMemberInfoList[$n++] = null !== $item ? consortiumMemberInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
