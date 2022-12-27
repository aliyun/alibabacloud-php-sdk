<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsResponseBody\applications;

use AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsResponseBody\applications\application\appList;
use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @var appList
     */
    public $appList;

    /**
     * @example ay-ads-hz-h
     *
     * @var string
     */
    public $clusterName;
    protected $_name = [
        'appList'     => 'AppList',
        'clusterName' => 'ClusterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appList) {
            $res['AppList'] = null !== $this->appList ? $this->appList->toMap() : null;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppList'])) {
            $model->appList = appList::fromMap($map['AppList']);
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        return $model;
    }
}
