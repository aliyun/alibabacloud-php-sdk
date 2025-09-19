<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterInterceptionConfigResponseBody\clusterConfigList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterInterceptionConfigResponseBody\pageInfo;

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
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterConfigList' => 'ClusterConfigList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->clusterConfigList)) {
            Model::validateArray($this->clusterConfigList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterConfigList) {
            if (\is_array($this->clusterConfigList)) {
                $res['ClusterConfigList'] = [];
                $n1 = 0;
                foreach ($this->clusterConfigList as $item1) {
                    $res['ClusterConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ClusterConfigList'])) {
            if (!empty($map['ClusterConfigList'])) {
                $model->clusterConfigList = [];
                $n1 = 0;
                foreach ($map['ClusterConfigList'] as $item1) {
                    $model->clusterConfigList[$n1] = clusterConfigList::fromMap($item1);
                    ++$n1;
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
