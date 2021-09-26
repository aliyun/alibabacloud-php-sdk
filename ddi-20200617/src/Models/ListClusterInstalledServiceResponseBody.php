<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterInstalledServiceResponseBody\clusterInstalledServiceList;
use AlibabaCloud\Tea\Model;

class ListClusterInstalledServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var clusterInstalledServiceList
     */
    public $clusterInstalledServiceList;
    protected $_name = [
        'requestId'                   => 'RequestId',
        'clusterInstalledServiceList' => 'ClusterInstalledServiceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clusterInstalledServiceList) {
            $res['ClusterInstalledServiceList'] = null !== $this->clusterInstalledServiceList ? $this->clusterInstalledServiceList->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClusterInstalledServiceList'])) {
            $model->clusterInstalledServiceList = clusterInstalledServiceList::fromMap($map['ClusterInstalledServiceList']);
        }

        return $model;
    }
}
