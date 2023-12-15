<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetMemberListResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetMemberListResponseBody\result\consortiumMemberInfoList;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetMemberListResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $consortiumAdmin;

    /**
     * @var consortiumMemberInfoList[]
     */
    public $consortiumMemberInfoList;

    /**
     * @var pagination
     */
    public $pagination;
    protected $_name = [
        'consortiumAdmin'          => 'ConsortiumAdmin',
        'consortiumMemberInfoList' => 'ConsortiumMemberInfoList',
        'pagination'               => 'Pagination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumAdmin) {
            $res['ConsortiumAdmin'] = $this->consortiumAdmin;
        }
        if (null !== $this->consortiumMemberInfoList) {
            $res['ConsortiumMemberInfoList'] = [];
            if (null !== $this->consortiumMemberInfoList && \is_array($this->consortiumMemberInfoList)) {
                $n = 0;
                foreach ($this->consortiumMemberInfoList as $item) {
                    $res['ConsortiumMemberInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
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
        if (isset($map['ConsortiumAdmin'])) {
            $model->consortiumAdmin = $map['ConsortiumAdmin'];
        }
        if (isset($map['ConsortiumMemberInfoList'])) {
            if (!empty($map['ConsortiumMemberInfoList'])) {
                $model->consortiumMemberInfoList = [];
                $n                               = 0;
                foreach ($map['ConsortiumMemberInfoList'] as $item) {
                    $model->consortiumMemberInfoList[$n++] = null !== $item ? consortiumMemberInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        return $model;
    }
}
