<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterInterceptionConfigResponseBody\clusterConfigList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterInterceptionConfigResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListClusterInterceptionConfigResponseBody extends Model
{
    /**
     * @var clusterConfigList[]
     */
    public $clusterConfigList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example 49FDE92F-A0B8-56CC-B7A8-23B17646****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterConfigList' => 'ClusterConfigList',
        'pageInfo'          => 'PageInfo',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterConfigList) {
            $res['ClusterConfigList'] = [];
            if (null !== $this->clusterConfigList && \is_array($this->clusterConfigList)) {
                $n = 0;
                foreach ($this->clusterConfigList as $item) {
                    $res['ClusterConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterInterceptionConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterConfigList'])) {
            if (!empty($map['ClusterConfigList'])) {
                $model->clusterConfigList = [];
                $n                        = 0;
                foreach ($map['ClusterConfigList'] as $item) {
                    $model->clusterConfigList[$n++] = null !== $item ? clusterConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
