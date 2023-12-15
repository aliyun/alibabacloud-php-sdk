<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetNodeListResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetNodeListResponseBody\result\chainNodeInfoList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var chainNodeInfoList[]
     */
    public $chainNodeInfoList;

    /**
     * @var bool
     */
    public $consortiumAdmin;
    protected $_name = [
        'chainNodeInfoList' => 'ChainNodeInfoList',
        'consortiumAdmin'   => 'ConsortiumAdmin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainNodeInfoList) {
            $res['ChainNodeInfoList'] = [];
            if (null !== $this->chainNodeInfoList && \is_array($this->chainNodeInfoList)) {
                $n = 0;
                foreach ($this->chainNodeInfoList as $item) {
                    $res['ChainNodeInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->consortiumAdmin) {
            $res['ConsortiumAdmin'] = $this->consortiumAdmin;
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
        if (isset($map['ChainNodeInfoList'])) {
            if (!empty($map['ChainNodeInfoList'])) {
                $model->chainNodeInfoList = [];
                $n                        = 0;
                foreach ($map['ChainNodeInfoList'] as $item) {
                    $model->chainNodeInfoList[$n++] = null !== $item ? chainNodeInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConsortiumAdmin'])) {
            $model->consortiumAdmin = $map['ConsortiumAdmin'];
        }

        return $model;
    }
}
