<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterInstalledServiceResponseBody\clusterInstalledServiceList;
use AlibabaCloud\Tea\Model;

class ListClusterInstalledServiceResponseBody extends Model
{
    /**
     * @var clusterInstalledServiceList
     */
    public $clusterInstalledServiceList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterInstalledServiceList' => 'ClusterInstalledServiceList',
        'requestId'                   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterInstalledServiceList) {
            $res['ClusterInstalledServiceList'] = null !== $this->clusterInstalledServiceList ? $this->clusterInstalledServiceList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterInstalledServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterInstalledServiceList'])) {
            $model->clusterInstalledServiceList = clusterInstalledServiceList::fromMap($map['ClusterInstalledServiceList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
